<?php

namespace AppBundle\Repository;

/**
 * PostsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostsRepository extends \Doctrine\ORM\EntityRepository
{
    const MAX_HOME_POSTS = 6;

    public function findHomePosts() :array
    {
        return $this->createQueryBuilder('p')
            ->where('p.isApproved = true')
            ->orderBy('p.publishedAt', 'DESC')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true)
            ->setMaxResults(self::MAX_HOME_POSTS)
            ->getResult();
    }
}
