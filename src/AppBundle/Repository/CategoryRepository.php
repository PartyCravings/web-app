<?php

namespace AppBundle\Repository;

/**
 * CategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategoryRepository extends \Doctrine\ORM\EntityRepository
{
    public function findHeaderCategories() :array
    {
        return $this->createQueryBuilder('p')
            ->where('p.idParent = false')
            ->andWhere('l = true')
            ->andWhere('p.isEnabled = true')
            ->innerJoin('p.child', 'l')
            ->orderBy('p.name', 'DESC')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true)
            ->getResult();
    }

    public function findAllByCountry(array $country) :array
    {
        return $this->createQueryBuilder('p')
            ->where('p.idParent = false')
            ->andWhere('p.isEnabled =  true')
            ->andWhere('p.country = :country')
            ->setParameters($country)
            ->orderBy('p.name', 'DESC')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true)
            ->getResult();
    }

    public function findChildByParent(array $slugCountry) :array
    {
        return $this->createQueryBuilder('p')
            ->where('p.isEnabled = true')
            ->andWhere('f.slug = :slug')
            ->andWhere('p.country = :country')
            ->innerJoin('p.idParent', 'f')
            ->setParameters($slugCountry)
            ->orderBy('p.name', 'DESC')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true)
            ->getResult();
    }
}
