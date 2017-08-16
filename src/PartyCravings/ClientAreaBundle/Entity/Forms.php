<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Forms
 *
 * @ORM\Table(name="forms")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\FormsRepository")
 */
class Forms
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
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="form_id", type="integer")
     */
    private $formId;

    /**
     * @var string
     *
     * @ORM\Column(name="success_page", type="string", length=255)
     */
    private $successPage;

    /**
     * @var string
     *
     * @ORM\Column(name="form_name", type="string", length=255)
     */
    private $formName;

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=255)
     */
    private $controller;


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
     * Set status
     *
     * @param string $status
     *
     * @return Forms
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set formId
     *
     * @param integer $formId
     *
     * @return Forms
     */
    public function setFormId($formId)
    {
        $this->formId = $formId;

        return $this;
    }

    /**
     * Get formId
     *
     * @return int
     */
    public function getFormId()
    {
        return $this->formId;
    }

    /**
     * Set successPage
     *
     * @param string $successPage
     *
     * @return Forms
     */
    public function setSuccessPage($successPage)
    {
        $this->successPage = $successPage;

        return $this;
    }

    /**
     * Get successPage
     *
     * @return string
     */
    public function getSuccessPage()
    {
        return $this->successPage;
    }

    /**
     * Set formName
     *
     * @param string $formName
     *
     * @return Forms
     */
    public function setFormName($formName)
    {
        $this->formName = $formName;

        return $this;
    }

    /**
     * Get formName
     *
     * @return string
     */
    public function getFormName()
    {
        return $this->formName;
    }

    /**
     * Set controller
     *
     * @param string $controller
     *
     * @return Forms
     */
    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Get controller
     *
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }
}

