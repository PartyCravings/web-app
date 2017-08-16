<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Audit
 *
 * @ORM\Table(name="audit")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\AuditRepository")
 */
class Audit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="audit_id", type="integer")
     */
    private $auditId;

    /**
     * @var int
     *
     * @ORM\Column(name="action_id", type="integer")
     */
    private $actionId;

    /**
     * @var string
     *
     * @ORM\Column(name="context", type="string", length=255)
     */
    private $context;

    /**
     * @var int
     *
     * @ORM\Column(name="context_id", type="integer")
     */
    private $contextId;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer")
     */
    private $parentId;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=255)
     */
    private $details;

    /**
     * @var int
     *
     * @ORM\Column(name="user_id", type="integer")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var int
     *
     * @ORM\Column(name="usertype", type="integer")
     */
    private $usertype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime")
     */
    private $updated;

    /**
     * @var int
     *
     * @ORM\Column(name="account_id", type="integer")
     */
    private $accountId;

    /**
     * @var int
     *
     * @ORM\Column(name="advertiser_account_id", type="integer")
     */
    private $advertiserAccountId;

    /**
     * @var int
     *
     * @ORM\Column(name="website_account_id", type="integer")
     */
    private $websiteAccountId;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set auditId
     *
     * @param integer $auditId
     *
     * @return Audit
     */
    public function setAuditId($auditId)
    {
        $this->auditId = $auditId;

        return $this;
    }

    /**
     * Get auditId
     *
     * @return int
     */
    public function getAuditId()
    {
        return $this->auditId;
    }

    /**
     * Set actionId
     *
     * @param integer $actionId
     *
     * @return Audit
     */
    public function setActionId($actionId)
    {
        $this->actionId = $actionId;

        return $this;
    }

    /**
     * Get actionId
     *
     * @return int
     */
    public function getActionId()
    {
        return $this->actionId;
    }

    /**
     * Set context
     *
     * @param string $context
     *
     * @return Audit
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $this;
    }

    /**
     * Get context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set contextId
     *
     * @param integer $contextId
     *
     * @return Audit
     */
    public function setContextId($contextId)
    {
        $this->contextId = $contextId;

        return $this;
    }

    /**
     * Get contextId
     *
     * @return int
     */
    public function getContextId()
    {
        return $this->contextId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     *
     * @return Audit
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set details
     *
     * @param string $details
     *
     * @return Audit
     */
    public function setDetails($details)
    {
        $this->details = $details;

        return $this;
    }

    /**
     * Get details
     *
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Audit
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Audit
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set usertype
     *
     * @param integer $usertype
     *
     * @return Audit
     */
    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;

        return $this;
    }

    /**
     * Get usertype
     *
     * @return int
     */
    public function getUsertype()
    {
        return $this->usertype;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Audit
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set accountId
     *
     * @param integer $accountId
     *
     * @return Audit
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set advertiserAccountId
     *
     * @param integer $advertiserAccountId
     *
     * @return Audit
     */
    public function setAdvertiserAccountId($advertiserAccountId)
    {
        $this->advertiserAccountId = $advertiserAccountId;

        return $this;
    }

    /**
     * Get advertiserAccountId
     *
     * @return int
     */
    public function getAdvertiserAccountId()
    {
        return $this->advertiserAccountId;
    }

    /**
     * Set websiteAccountId
     *
     * @param integer $websiteAccountId
     *
     * @return Audit
     */
    public function setWebsiteAccountId($websiteAccountId)
    {
        $this->websiteAccountId = $websiteAccountId;

        return $this;
    }

    /**
     * Get websiteAccountId
     *
     * @return int
     */
    public function getWebsiteAccountId()
    {
        return $this->websiteAccountId;
    }
}

