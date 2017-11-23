<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Twig;

use AppBundle\Utils\Markdown;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Symfony\Component\Intl\Intl;

/**
 * This Twig extension adds a new 'md2html' filter to easily transform Markdown
 * contents into HTML contents inside Twig templates.
 *
 * See https://symfony.com/doc/current/cookbook/templating/twig_extension.html
 *
 * In addition to creating the Twig extension class, before using it you must also
 * register it as a service. See app/config/services.yml file for details.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 * @author Julien ITARD <julienitard@gmail.com>
 */
class AppExtension extends AbstractExtension
{
    private $parser;

    private $localeCodes;

    private $locales;

    public function __construct(
        array $locales,
        Markdown $parser

    ) {
        $this->parser = $parser;
        $this->localeCodes = $locales;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('md2html', [$this, 'markdownToHtml'], ['is_safe' => ['html']]),
            new TwigFilter('base64encode', [$this, 'base64encode'], ['is_safe' => ['html']]),
            new TwigFilter('country', [$this, 'countryFilter']),
            new TwigFilter('language', [$this, 'languageFilter']),
            new TwigFilter('json_decode', [$this, 'jsonDecode'], ['is_safe' => ['html']])
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('locales', [$this, 'getLocales']),
        ];
    }

    public function languageFilter(string $language, string $locale = 'en') : ?string
    {
        return Intl::getLanguageBundle()->getLanguageName($language, null, $locale);
    }

    /**
     * Transforms the given Markdown content into HTML content.
     */
    public function markdownToHtml(string $content): ?string
    {
        return $this->parser->toHtml($content);
    }

    public function jsonDecode(string $json) :array
    {
        return (array)json_decode($json);
    }

    public function base64encode(string $content): ?string
    {
        return base64_encode($content);
    }

    public function countryFilter(string $countryCode, string $locale = 'en') : ?string
    {
        return Intl::getRegionBundle()->getCountryName($countryCode, $locale);
    }

    /**
     * Takes the list of codes of the locales (languages) enabled in the
     * application and returns an array with the name of each locale written
     * in its own language (e.g. English, Français, Español, etc.).
     */
    public function getLocales(): array
    {
        if (null !== $this->locales) {
            return $this->locales;
        }

        $this->locales = [];
        foreach ($this->localeCodes as $localeCode) {
            $this->locales[] = ['code' => $localeCode, 'name' => Intl::getLocaleBundle()->getLocaleName($localeCode, $localeCode)];
        }

        return $this->locales;
    }
}
