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

use AppBundle\Entity\Country;

/**
 * CountryRepository.
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CountryRepository extends \Doctrine\ORM\EntityRepository
{
    const HOME_MAX_COUNTRIES = 5;

    public function findByName(string $name): ?Country
    {
        return $this->createQueryBuilder('p')
            ->where('p.isEnabled = true')
            ->andWhere('(
                p.subdomain = :name
            ) OR (
                p.hostname = :name
            ) OR (
                p.name = :name
            )')
            ->andWhere('p.isEnabled = true')
            ->setParameter('name', $name)
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true)
            ->getOneOrNullResult();
    }

    public function findAll(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.isEnabled = true')
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true)
            ->getResult();
    }

    public function findSimilarCountries(Country $country): array
    {
        $region = strtok($country->getTimezone(), '/');

        return $this->createQueryBuilder('p')
            ->where('p.timezone LIKE :timezone')
            ->andWhere('p.isEnabled = true')
            ->setParameter('timezone', '%'.$region.'%')
            ->setMaxResults(self::HOME_MAX_COUNTRIES)
            ->getQuery()
            ->useQueryCache(true)
            ->useResultCache(true)
            ->getResult();
    }
}
