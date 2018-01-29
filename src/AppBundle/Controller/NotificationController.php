<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Country;
use AppBundle\Entity\Subscriber;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/notification")
 * @Method("POST")
 * @ParamConverter("_country", class="AppBundle:Country", options={"id"="_country", "repository_method"="findByName"})
 */
class NotificationController extends AbstractController
{
    /**
     * @Route("/register", name="notification_register")
     */
    public function registerAction(Country $_country, Request $request, EntityManagerInterface $em)
    {
        $new = false;
        $data = json_decode($request->getContent(), true);

        $subscriber = $em->getRepository(Subscriber::class)->findOneBy(['endpoint' => $data['endpoint']]);
        if (!$subscriber) {
            $new = true;
            $subscriber = (new Subscriber())
                    ->setIsEnabled(true)
                    ->setBrowserKey($data['key'])
                    ->setEndpoint($data['endpoint'])
                    ->setAuthSecret($data['authSecret'])
                    ->setCountry($_country);

            $em->persist($subscriber);
            $em->flush();
        }

        return  $this->json(['new' => $new, 'success' => true]);
    }

    /**
     * @Route("/unregister", name="notification_unregister")
     */
    public function unregisterAction(Request $request, EntityManagerInterface $em)
    {
        $data = json_decode($request->getContent(), true);
        $subscriber = $em->getRepository(Subscriber::class)->findOneBy(['endpoint' => $data['endpoint']]);
        if (!$subscriber) {
            throw $this->createNotFoundException('Not found');
        }
        $em->remove($subscriber);
        $em->flush();

        return  $this->json(['removed' => true]);
    }

    /**
     * @Route("/newsletter", name="notification_newsletter_register")
     */
    public function newsletterAction(Country $_country, Request $request, EntityManagerInterface $em)
    {
        $translator = $this->get('translator');
        $form = $this->createFormBuilder(null, ['csrf_protection' => false])
            ->setAction($this->generateUrl('notification_newsletter_register'))
            ->setMethod('POST')
            ->add('email', EmailType::class, ['label' => false])
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->getData()['email'];
            $account = $em->getRepository('AppBundle::Account')->findOneByEmail($email);
            if ($account) {
                $account->getAccountDetails()->setNewsletterSigned(true);
                $em->flush();
                $this->addFlash('success', $translator->trans('newsletter.signup.success'));
            } else {
                $this->addFlash('failure', $translator->trans('newsletter.signup.failed'));
            }

            return $this->redirect($request->getReferer());
        }
    }
}
