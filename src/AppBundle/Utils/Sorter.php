<?php

namespace AppBundle\Utils;

use Doctrine\ORM\Query;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

class Sorter
{
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
}
