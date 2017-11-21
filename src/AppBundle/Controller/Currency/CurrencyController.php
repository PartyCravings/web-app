<?php

namespace AppBundle\Controller\Currency;

use LogicException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class ControllerCurrency
 *
 * @Route(
 *      path = "/currency")
 */
class CurrencyController extends AbstractController
{

    /**
     * Currency navigator
     *
     * @return Response Response
     *
     * @throws LogicException No currencies available
     *
     * @Route(
     *      path = "/nav",
     *      name = "store_currency_nav",
     *      methods = {"GET"}
     * )
     * @Template(
     *     ":fragments:currency-nav.html.twig"
     * )
     */
    public function navAction()
    {
        $currencies = $this
            ->get('AppBundle:Currency')
            ->findBy([
                'isEnabled' => true,
            ]);

        if (empty($currencies)) {
            throw new LogicException(
                'There are not currencies, you must configure at least one'
            );
        }

        $activeCurrency = $this
            ->get('elcodi.wrapper.currency')
            ->get();

        return
            [
                'currencies'     => $currencies,
                'activeCurrency' => $activeCurrency,
            ];
    }

    /**
     * Switch currency to new one
     *
     * @param Request $request Request
     * @param string  $iso     Currency iso
     *
     * @return RedirectResponse Last page
     *
     * @Route(
     *      path = "/switch/{iso}",
     *      name = "store_currency_switch",
     *      methods = {"GET"}
     * )
     */
    public function switchAction(Request $request, string $iso, EntityManagerInterface $em)
    {
        $currency = $em
            ->getRepository('AppBundle:Currency')
            ->findOneBy([
                'enabled' => true,
                'iso'     => $iso,
            ]);

        if ($currency instanceof \AppBundle\Entity\Currency) {
            $this
                ->get('elcodi.manager.currency_session')
                ->set($currency);
        }

        $referrer = $request
            ->headers
            ->get(
                'referer',
                $this->generateUrl('homepage')
            );

        return $this->redirect($referrer);
    }
}
