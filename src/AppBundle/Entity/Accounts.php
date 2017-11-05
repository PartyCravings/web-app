<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Accounts
 *
 * @ORM\Table(name="accounts")
 * @Gedmo\SoftDeleteable(fieldName="deletedAt", timeAware=false)
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccountsRepository")
 */
class Accounts extends BaseUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="deleted_at", type="datetime", nullable=true)
     */
    private $deletedAt;

    /**
     * @ORM\OneToOne(targetEntity="AccountDetails")
     **/
    private $accountDetail;

    /**
     * @var PreRegistration
     *
     * @ORM\OneToMany(targetEntity="PreRegistration", mappedBy="account")
     */
    private $preRegistration;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_id", type="string", nullable=true)
     */
    protected $facebook_id;

    /**
     * @var string
     *
     * @ORM\Column(name="facebook_access_token", type="string", nullable=true)
     */
    protected $facebook_access_token;

    /**
     * @var string
     *
     * @ORM\Column(name="google_id", type="string", nullable=true)
     */
    protected $google_id;

    /**
     * @var string
     *
     * @ORM\Column(name="google_access_token", type="string", nullable=true)
     */
    protected $google_access_token;

    /**
     * Accounts constructor.
     */
    public function __construct()
    {
        $this->preRegistration = new ArrayCollection();
        parent::__construct();
    }
}
