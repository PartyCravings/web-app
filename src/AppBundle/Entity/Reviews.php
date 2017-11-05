<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reviews
 *
 * @ORM\Table(name="reviews")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReviewsRepository")
 */
class Reviews
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
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="review.blank_content")
     * @Assert\Length(
     *     min=5,
     *     minMessage="review.too_short",
     *     max=1000,
     *     maxMessage="review.too_long"
     * )
     */
    private $content;

    /**
     * @var int
     *
     * @Assert\NotBlank(message="review.blank_rating")
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    private $created;

    /**
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Accounts")
     */
    private $author;

    /**
     * @var Service
     *
     * @ORM\ManyToOne(targetEntity="Service", inversedBy="reviews")
     */
    private $service;

    /**
     * @Assert\IsTrue(message="review.is_spam")
     */
    public function isLegitReview()
    {
        $containsInvalidCharacters = false !== mb_strpos($this->content, '@');

        return !$containsInvalidCharacters;
    }
}
