<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * PreRegistration
 *
 * @ORM\Table(name="pre_registration")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PreRegistrationRepository")
 */
class PreRegistration
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    private $id;

    /**
     * @var Accounts
     *
     * @ORM\ManyToOne(targetEntity="Accounts", inversedBy="preRegistration")
     */
    private $account;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @var string
     *
     * @ORM\Column(name="is_approved", type="boolean")
     */
    private $isApproved =  true;
}
