<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository;

use AppBundle\Entity\Post;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use AppBundle\Utils\Sorter;

/**
 * This custom Doctrine repository contains some methods which are useful when
 * querying for blog post information.
 *
 */
class PostRepository extends EntityRepository
{
    const NUM_ITEMS = 10;

    const MAX_HOME_POSTS = 3;

    public function findHomePosts() :array
    {
        return $this->createQueryBuilder('p')
                ->orderBy('p.created', 'DESC')
                ->setMaxResults(self::MAX_HOME_POSTS)
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true)
                ->getResult();
    }

    public function findLatest(int $page = 1): Pagerfanta
    {
        $query = $this->createQueryBuilder('p')
                ->where('p.publishedAt <= :now')
                ->orderBy('p.publishedAt', 'DESC')
                ->addSelect('a')
                ->addSelect('t')
                ->join('p.author', 'a')
                ->leftJoin('p.tags', 't')
                ->setParameter('now', new \DateTime())
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true);

        return Sorter::createPaginator($query, $page);
    }

    /**
     * @return Post[]
     */
    public function findBySearchQuery(string $rawQuery, int $page = 1, int $limit = self::NUM_ITEMS): array
    {
        $query = Sorter::sanitizeString($rawQuery);
        $searchTerms = Sorter::buildTree($query);

        if (0 === count($searchTerms)) {
            return [];
        }

        $queryBuilder = $this->createQueryBuilder('p');

        foreach ($searchTerms as $key => $term) {
            $queryBuilder
                ->orWhere("p.title LIKE :t_$key")
                ->setParameter("t_$key", "%$term%")
            ;
        }

        $query = $queryBuilder
            ->orderBy('p.publishedAt', 'DESC')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true);

        return Sorter::createPaginator($query, $page, $limit);
    }
}
