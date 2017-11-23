<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;

/**
 * @ORM\Entity
 * @ORM\Table(name="page_translations",
 *     uniqueConstraints={@ORM\UniqueConstraint(name="page_translation_idx", columns={
 *         "locale", "object_id", "field"
 *     })}
 * )
 */
class PageTranslation extends AbstractPersonalTranslation
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="guid")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="UUID")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Pages", inversedBy="translations")
     * @ORM\JoinColumn(onDelete="CASCADE")
     */
    protected $object;

    /**
     * Convinient constructor
     *
     * @param string $locale
     * @param string $field
     * @param string $value
     */
    public function __construct($locale, $field, $value)
    {
        $this->setLocale($locale);
        $this->setField($field);
        $this->setContent($value);
    }
}
