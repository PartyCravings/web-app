<?php

namespace AppBundle\Repository;

/**
 * SeoSettingsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SeoSettingsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getSeoSettings()
    {
        $em = $this->createQueryBuilder('p')
            ->select('p.seoCategory', 'p.seoContent')
            ->where('p.seoEnabled = 1')
            ->getQuery();
        return $em->execute();
    }
}
