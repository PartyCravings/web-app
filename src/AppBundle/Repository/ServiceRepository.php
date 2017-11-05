<?php

namespace AppBundle\Repository;

use Doctrine\ORM\Query;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use AppBundle\Utils\Sorter;
use AppBundle\Entity\Country;
use AppBundle\Entity\Category;
use AppBundle\Entity\Service;

/**
 * ServiceRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServiceRepository extends \Doctrine\ORM\EntityRepository
{
    const NUM_ITEMS = 20;

    public function findBySearchQuery(string $rawQuery, string $category, Country $country, int $page): Pagerfanta
    {
        $searchTerms = Sorter::buildTree(
            Sorter::sanitizeString(
                $rawQuery
                )
            );
        $queryBuilder = $this->createQueryBuilder('p')
                ->where('f.title = :category')
                ->setParameter('category', $category)
                ->andWhere('f.country = :country')
                ->setParameter('country', $country);

        foreach ($searchTerms as $key => $term) {
            $queryBuilder
                ->orWhere('p.name LIKE :t_'.$key)
                ->setParameter('t_'.$key, '%'.$term.'%');
        }
        $query = $queryBuilder
                ->innerJoin('p.category', 'f')
                ->leftJoin('p.reviews', 'f')
                ->addSelect('f')
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true);

        return Sorter::createPaginator($query, $page, self::NUM_ITEMS);
    }

    public function findAllByCountry(Country $country, int $page) :Pagerfanta
    {
        $query = $this->createQueryBuilder('p')
                ->where('f.country = :country')
                ->andWhere('p.isEnabled =  true')
                ->innerJoin('p.category', 'f')
                ->leftJoin('p.reviews', 'f')
                ->addSelect('f')
                ->orderBy('p.dateAdd', 'DESC')
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true);

        return Sorter::createPaginator($query, $page, self::NUM_ITEMS);
    }

    public function findBySlug(string $slug) : ?Service
    {
        return $this->createQueryBuilder('p')
                ->where('p.isEnabled = true')
                ->andWhere('p.slug = :slug')
                ->setParameter($slug)
                ->leftJoin('p.reviews', 'f')
                ->addSelect('f')
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true)
                ->getOneOrNullResult();
    }

    public function findAllByCategory(Category $category, int $page) :Pagerfanta
    {
        $query = $this->createQueryBuilder('p')
                ->where('p.isEnabled = true')
                ->andWhere('p.category = :category')
                ->setParameter('category', $category)
                ->leftJoin('p.reviews', 'f')
                ->addSelect('f')
                ->orderBy('p.dateAdd', 'DESC')
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true);

        return Sorter::createPaginator($query, $page, self::NUM_ITEMS);
    }

    public function findAllByCategoryLocation(Category $category, Location $location, int $page) :Pagerfanta
    {
        $query = $this->createQueryBuilder('p')
                ->where('p.isEnabled = true')
                ->andWhere('p.category = :category')
                ->andWhere('p.location = :location')
                ->leftJoin('p.reviews', 'f')
                ->addSelect('f')
                ->setParameter('category', $category)
                ->setParameter('location', $location)
                ->orderBy('p.dateAdd', 'DESC')
                ->getQuery()
                ->useQueryCache(true)
                ->useResultCache(true);

        return Sorter::createPaginator($query, $page, self::NUM_ITEMS);
    }
}
