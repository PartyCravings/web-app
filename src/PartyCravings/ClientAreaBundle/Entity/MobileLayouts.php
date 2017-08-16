<?php

namespace PartyCravings\ClientAreaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MobileLayouts
 *
 * @ORM\Table(name="mobile_layouts")
 * @ORM\Entity(repositoryClass="PartyCravings\ClientAreaBundle\Repository\MobileLayoutsRepository")
 */
class MobileLayouts
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
     * @ORM\Column(name="layout_id", type="integer")
     */
    private $layoutId;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="model_name", type="string", length=255)
     */
    private $modelName;

    /**
     * @var string
     *
     * @ORM\Column(name="layout", type="string", length=255)
     */
    private $layout;

    /**
     * @var bool
     *
     * @ORM\Column(name="default_form", type="boolean")
     */
    private $defaultForm;

    /**
     * @var bool
     *
     * @ORM\Column(name="default_view", type="boolean")
     */
    private $defaultView;


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
     * Set layoutId
     *
     * @param integer $layoutId
     *
     * @return MobileLayouts
     */
    public function setLayoutId($layoutId)
    {
        $this->layoutId = $layoutId;

        return $this;
    }

    /**
     * Get layoutId
     *
     * @return int
     */
    public function getLayoutId()
    {
        return $this->layoutId;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return MobileLayouts
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set modelName
     *
     * @param string $modelName
     *
     * @return MobileLayouts
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;

        return $this;
    }

    /**
     * Get modelName
     *
     * @return string
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set layout
     *
     * @param string $layout
     *
     * @return MobileLayouts
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set defaultForm
     *
     * @param boolean $defaultForm
     *
     * @return MobileLayouts
     */
    public function setDefaultForm($defaultForm)
    {
        $this->defaultForm = $defaultForm;

        return $this;
    }

    /**
     * Get defaultForm
     *
     * @return bool
     */
    public function getDefaultForm()
    {
        return $this->defaultForm;
    }

    /**
     * Set defaultView
     *
     * @param boolean $defaultView
     *
     * @return MobileLayouts
     */
    public function setDefaultView($defaultView)
    {
        $this->defaultView = $defaultView;

        return $this;
    }

    /**
     * Get defaultView
     *
     * @return bool
     */
    public function getDefaultView()
    {
        return $this->defaultView;
    }
}

