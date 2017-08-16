<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Access
 *
 * @ORM\Table(name="access")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AccessRepository")
 */
class Access
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
     * @ORM\Column(name="id_profile", type="string", length=255)
     */
    private $idProfile;

    /**
     * @var string
     *
     * @ORM\Column(name="id_tab", type="string", length=255)
     */
    private $idTab;

    /**
     * @var string
     *
     * @ORM\Column(name="view", type="string", length=255)
     */
    private $view;


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
     * Set idProfile
     *
     * @param string $idProfile
     *
     * @return Access
     */
    public function setIdProfile($idProfile)
    {
        $this->idProfile = $idProfile;

        return $this;
    }

    /**
     * Get idProfile
     *
     * @return string
     */
    public function getIdProfile()
    {
        return $this->idProfile;
    }

    /**
     * Set idTab
     *
     * @param string $idTab
     *
     * @return Access
     */
    public function setIdTab($idTab)
    {
        $this->idTab = $idTab;

        return $this;
    }

    /**
     * Get idTab
     *
     * @return string
     */
    public function getIdTab()
    {
        return $this->idTab;
    }

    /**
     * Set view
     *
     * @param string $view
     *
     * @return Access
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return string
     */
    public function getView()
    {
        return $this->view;
    }
}

