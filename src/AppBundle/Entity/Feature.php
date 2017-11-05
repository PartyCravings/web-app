<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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
     * @ORM\Column(name="name", type="string", unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="icon", type="string")
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
}
