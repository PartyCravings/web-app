<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Feature
 *
 * @ORM\Table(name="feature")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FeatureRepository")
 */
class Feature implements \JsonSerializable
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
     * @Assert\NotBlank(message="feature.name.blank")
     * @Assert\Length(
     *     min=2,
     *     minMessage="feature.name.too_short",
     *     max=10,
     *     maxMessage="feature.name.too_long"
     * )
     * @ORM\Column(name="name", type="string", unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @Assert\Length(
     *     min=2,
     *     minMessage="feature.icon.too_short",
     *     max=20,
     *     maxMessage="feature.icon.too_long"
     * )
     * @ORM\Column(name="icon", type="string", nullable=true)
     */
    private $icon;

    /**
     * {@inheritdoc}
     */
    public function jsonSerialize()
    {
        // This entity implements JsonSerializable (http://php.net/manual/en/class.jsonserializable.php)
        // so this method is used to customize its JSON representation when json_encode()
        // is called, for example in tags|json_encode (app/Resources/views/form/fields.html.twig)

        return $this->name;
    }

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
     * @return Feature
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
     * Set icon
     *
     * @param string $icon
     *
     * @return Feature
     */
    public function setIcon($icon)
    {
        $this->icon = $icon;

        return $this;
    }

    /**
     * Get icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->icon;
    }
}
