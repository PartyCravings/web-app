<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SocialLink
 *
 * @ORM\Table(name="social_link")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SocialLinkRepository")
 */
class SocialLink
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
     * @var string
     *
     * @Assert\NotBlank(message="social.content.blank")
     * @Assert\Length(min=5, minMessage="social.name.too_short")
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\Length(min=7, minMessage="social.link.too_short")
     * @Assert\Url(
     *      checkDNS = true,
     *      dnsMessage="social.link.not_resolved"
     * )
     * @ORM\Column(name="link", type="string")
     */
    private $link;

    public function __toString()
    {
        return $this->name;
    }


    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SocialLink
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set link
     *
     * @param string $link
     *
     * @return SocialLink
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}
