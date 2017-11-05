<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notifications
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
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Country")
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timestamp", type="datetime")
     */
    private $timestamp;

    /**
     * @var string
     *
     * @ORM\Column(name="object_type", type="string")
     */
    private $objectType;

    /**
     * @var int
     *
     * @ORM\Column(name="object_id", type="integer")
     */
    private $objectId;

    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string")
     */
    private $subject;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_parameters", type="string")
     */
    private $subjectParameters;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string")
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="message_parameters", type="string")
     */
    private $messageParameters;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string")
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string")
     */
    private $icon;

    /**
     * @var string
     *
     * @ORM\Column(name="actions", type="string")
     */
    private $actions;
}
