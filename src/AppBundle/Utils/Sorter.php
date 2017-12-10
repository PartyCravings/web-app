<?php

namespace AppBundle\Utils;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Query;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use AppBundle\Entity\Category;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class Sorter
{

    /**
     * @var EntityManagerInterface
     */
    private $em;


    /*
     * @param EntityManagerInterface $em
     *
     **/
    public function __construct(
        EntityManagerInterface $em,
        UrlGeneratorInterface $generator
    ) {
        $this->generator = $generator;
        $this->em = $em;
    }


    public static function createPaginator(Query $query, int $page, int $maxPerPage = 20): Pagerfanta
    {
        $paginator = new Pagerfanta(new DoctrineORMAdapter($query));
        $paginator->setMaxPerPage($maxPerPage);
        $paginator->setCurrentPage($page);
        return $paginator;
    }

    /**
     * Removes all non-alphanumeric characters except whitespaces.
     */
    public static function sanitizeString(string $query): string
    {
        return preg_replace('/[^[:alnum:] ]/ui', '', trim(preg_replace('/[[:space:]]+/', ' ', $query)));
    }
    /**
     * Splits the search query into terms and removes the ones which are irrelevant.
     */
    public static function buildTree(string $sanitizedString): array
    {
        $terms = array_unique(explode(' ', mb_strtolower($sanitizedString)));
        return array_filter($terms, function ($term) {
            return 2 <= mb_strlen($term);
        });
    }

    public function buildHtmlCategoryHierarchy(Category $category = null) : string
    {
        $generator = $this->generator;

        $tree = $this->em->getRepository('AppBundle:Category')->childrenHierarchy($category, false, array('decorate' => true,
            'rootOpen' => function ($tree) {
                if (count($tree) && ($tree[0]['lvl'] == 0)) {
                    return '<li class="item">';
                }
            },
            'rootClose' => function ($child) {
                if (count($child) && ($child[0]['lvl'] == 0)) {
                    return '</li>';
                }
            },
            'childOpen' => '',
            'childClose' => '',
            'nodeDecorator' => function ($node) use (&$generator) {
                if ($node['lvl'] == 1 || $node['lvl'] == 2 ||  $node['lvl'] == 3) {
                    $link = $generator->generate('category_show', array('slug' => $node['slug']), UrlGeneratorInterface::ABSOLUTE_PATH);
                    $name = ucfirst($node['title']);
                    return "<a href=\"{$link}\">$name</a>";
                }
            }
        ));
        return $tree;
    }
}
