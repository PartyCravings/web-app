<?php

namespace AppBundle\Controller\Notifications;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Subscriber;
use AppBundle\Entity\Country;

/* Class NotificationController
 * @package AppBundle\Controller
 *
 * @Route("notification")
 * @ParamConverter(
                    "_country",
                    class="AppBundle:Country",
                    options=
                    {
                        "id" = "_country",
                        "repository_method" = "findByName"
                    }
                )
 */
class NotificationController extends AbstractController
{
    /**
     * @Route("/register", name="notification_register")
     * @Method("POST")
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
     * @Method("POST")
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
}
