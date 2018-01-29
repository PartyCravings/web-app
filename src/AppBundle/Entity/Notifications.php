<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Notifications.
 *
 * @ORM\Table(name="notifications")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotificationsRepository")
 */
class Notifications
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
     * @var Country
     *
     * @Assert\NotBlank(message="notification.country.blank")
     * @ORM\ManyToOne(targetEntity="Country")
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(name="t_stamp", type="datetime")
     */
    private $tStamp;

    /**
     * @var string
     *
     * @Assert\Length(
     *     min=3,
     *     minMessage="notification.subject.too_short",
     *     max=100,
     *     maxMessage="notification.subject.too_long"
     * )
     * @Assert\NotBlank(message="notification.subject.blank")
     * @ORM\Column(name="subject", type="string")
     */
    private $subject;

    /**
     * @var string
     *
     * @Assert\Url(
     *      checkDNS = true,
     *      dnsMessage="notification.link.not_resolved"
     * )
     * @ORM\Column(name="link", type="string", nullable=true)
     */
    private $link;

    /**
     * @var string
     *
     * @Assert\Url(
     *      checkDNS = true,
     *      dnsMessage="notification.icon.not_resolved"
     * )
     * @ORM\Column(name="icon", type="string", nullable=true)
     */
    private $icon;

    public function __toString()
    {
        return $this->subject;
    }

    /**
     * Get id.
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tStamp.
     *
     * @param \DateTime $tStamp
     *
     * @return Notifications
     */
    public function setTStamp($tStamp)
    {
        $this->tStamp = $tStamp;

        return $this;
    }

    /**
     * Get tStamp.
     *
     * @return \DateTime
     */
    public function getTStamp()
    {
        return $this->tStamp;
    }

    /**
     * Set subject.
     *
     * @param string $subject
     *
     * @return Notifications
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set link.
     *
     * @param string $link
     *
     * @return Notifications
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link.
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set icon.
     *
     * @param string $icon
     *
     * @return Notifications
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon.
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }

    /**
     * Set country.
     *
     * @param \AppBundle\Entity\Country $country
     *
     * @return Notifications
     */
    public function setCountry(\AppBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return \AppBundle\Entity\Country
     */
    public function getCountry()
    {
        return $this->country;
    }
}
