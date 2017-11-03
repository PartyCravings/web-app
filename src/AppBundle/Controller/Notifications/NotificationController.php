<?php

namespace AppBundle\Controller\Notifications;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use AppBundle\Entity\Subscriber;

/* Class NotificationController
 * @package AppBundle\Controller
 *
 * @Route("notification")
 */
class NotificationController extends AbstractController
{
    /**
     * @Route("/register", name="notification_register")
     * @Method("POST")
     */
    public function registerAction(Request $request, EntityManagerInterface $em)
    {
        $is_new = false;
        // looking for better approach ? look in  http://labs.qandidate.com/blog/2014/08/13/handling-angularjs-post-requests-in-symfony/
        $data = json_decode($request->getContent(), true);
        $is_subscribed = $em->getRepository("AppBundle:Subscriber")->findOneBy(['endpoint' => $data['endpoint']]);
        if(is_null($is_subscribed)){
            $is_new = true;
            $subscriber = new Subscriber();
            $subscriber->setEnabled(true);
            $subscriber->setBrowserKey($data['key']);
            $subscriber->setEndpoint($data['endpoint']);
            $subscriber->setAuthSecret($data['authSecret']);
            $em->persist($subscriber);
            $em->flush();
        }
        return  $this->json(array('new' => $is_new, "success" => true));
    }

    /**
     * @Route("/unregister", name="notification_unregister")
     * @Method("POST")
     */
    public function unregisterAction(Request $request, EntityManagerInterface $em)
    {
        $data = json_decode($request->getContent(), true);
        $is_subscribed = $em->getRepository(Subscriber::class)->findOneBy(['endpoint' => $data['endpoint']]);
        if (!$is_subscribed) {
            throw $this->createNotFoundException('No found');
        }
        $em->remove($is_subscribed);
        $em->flush();
        return  $this->json(array("removed" => true));
    }
}