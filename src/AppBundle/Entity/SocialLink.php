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
     * @Assert\NotBlank(message="link.blank_content")
     * @Assert\Length(min=5, minMessage="social.too_short_name")
     * @ORM\Column(name="name", type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\Length(min=7, minMessage="social.too_short_link")
     * @ORM\Column(name="link", type="string")
     */
    private $link;
}
