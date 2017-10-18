<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SearchWord
 *
 * @ORM\Table(name="search_word")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SearchWordRepository")
 */
class SearchWord
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
     * @ORM\Column(name="id_service", type="string", length=255)
     */
    private $idService;

    /**
     * @var string
     *
     * @ORM\Column(name="id_lang", type="string", length=255)
     */
    private $idLang;

    /**
     * @var string
     *
     * @ORM\Column(name="word", type="string", length=255)
     */
    private $word;


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
     * Set idService
     *
     * @param string $idService
     *
     * @return SearchWord
     */
    public function setIdService($idService)
    {
        $this->idService = $idService;

        return $this;
    }

    /**
     * Get idService
     *
     * @return string
     */
    public function getIdService()
    {
        return $this->idService;
    }

    /**
     * Set idLang
     *
     * @param string $idLang
     *
     * @return SearchWord
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return string
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set word
     *
     * @param string $word
     *
     * @return SearchWord
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }
}
