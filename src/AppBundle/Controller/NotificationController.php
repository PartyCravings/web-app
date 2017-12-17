<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use AppBundle\Entity\Subscriber;
use AppBundle\Entity\Country;

/**
 * @Route("/notification")
 * @Method("POST")
 * @ParamConverter("countries", class="AppBundle:Country", options={"id"="_country", "repository_method"= "findAll"})
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
        return  $this->json(array('new' => $new, "success" => true));
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
        return  $this->json(array("removed" => true));
    }

    /**
     * @Route("/newsletter", name="notification_newsletter_register")
     */
    public function newsletterAction(Country $_country, Request $request, EntityManagerInterface $em)
    {
        $translator = $this->get('translator');
        $form = $this->createFormBuilder(null, array('csrf_protection' => false))
            ->setAction($this->generateUrl('notification_newsletter_register'))
            ->setMethod('POST')
            ->add('email', EmailType::class, array('label'=> false))
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
