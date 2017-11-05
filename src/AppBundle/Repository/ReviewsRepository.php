<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Service;

/**
 * ReviewsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReviewsRepository extends \Doctrine\ORM\EntityRepository
{
    const MAX_REVIEWS = 5;

    public function findRecentReviews(Service $service) : array
    {
        return $this->createQueryBuilder('p')
                ->where('p.service = :service')
                ->setParameter('service', $service)
                ->orderBy('p.created', 'DESC')
                ->setMaxResults(self::MAX_REVIEWS)
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true)
                ->getResult();
    }

    public function findAverageRating(Service $service) : ?int
    {
        return $this->createQueryBuilder('p')
                ->select('ROUND(AVG(p.rating))')
                ->where('p.service =:service')
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true)
                ->getSingleScalarResult();
    }

    public function findMinimumRating(Service $service) : ?int
    {
        return $this->createQueryBuilder('p')
                ->select('MIN(p.rating)')
                ->where('p.service =:service')
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true)
                ->getSingleScalarResult();
    }

    public function findMaximumRating(Service $service) : ?int
    {
        return $this->createQueryBuilder('p')
                ->select('MAX(p.rating)')
                ->where('p.service =:service')
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true)
                ->getSingleScalarResult();
    }
}
