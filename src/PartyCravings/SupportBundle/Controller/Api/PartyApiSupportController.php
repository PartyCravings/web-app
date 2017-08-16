<?php

namespace PartyCravings\SupportBundle\Controller\Api;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
/**
 * @Route("/api/s")
 */
class PartyApiSupportController extends Controller
{
    /**
     * @Route("/tickets", name="api_tickets_list")
     * @Method({"GET"})
     */
    public function TicketAction()
    {
        $alltickets = getAllTickets();
        return new JsonResponse($alltickets);
    }
    /**
     * @Route("/tickets/pending", name="api_tickets_list_pending")
     * @Method({"GET"})
     */
    public function PendingTicketsAction()
    {
        $pendingtickets = getPendingTickets();
        return new JsonResponse($pendingtickets);
    }
    /**
     * @Route("/tickets/closed", name="api_tickets_list_closed")
     * @Method({"GET"})
     */
    public function ClosedTicketsAction()
    {
        $closedtickets = getClosedTickets();
        return new JsonResponse($closedtickets);
    }
    /**
     * @Route("/tickets/open", name="api_tickets_list_open")
     * @Method({"GET"})
     */
    public function OpenTicketsAction()
    {
        $opentickets = getOpenTickets();
        return new JsonResponse($opentickets);
    }
    /**
     * @Route("/tickets/{slug}", name="api_tickets_open")
     * @Method({"GET", "PUT"})
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function ExactTicketsAction(Request $request, $slug)
    {   //Only handles data on a 'PUT'
        $data = json_decode($request->getContent(), true);
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository('AppBundle:Tickets')->findBy(['id' => $data['id']]);
        $ticket->setMessage($data['message'])->setPriority($data['priority']);
        $em->flush();

        //Handles Data on a GET request
        $ticket = OpenTicket($slug);
        return new JsonResponse($ticket);
    }
    /**
     * @Route("/tickets/{slug}", name="api_tickets_delete")
     * @Method("DELETE")
     * @param $slug
     */
    public function DeleteTicketAction($slug)
    {   //Only matches on DELETE
        $em = $this->getDoctrine()->getManager();
        $ticket = $em->getRepository('AppBundle:Tickets')->findBy(['id' => $slug]);
        $em->remove($ticket);
        $em->flush();
    }
    /**
     * @Route("/schedules", name="api_schedules_list")
     * @Method({"GET"})
     */
    public function SupportSchedulesAction()
    {
        $schedules = getSupportSchedules();
        return new JsonResponse($schedules);
    }
    /**
     * @Route("/schedules/past", name="api_schedules_list_past")
     * @Method({"GET"})
     */
    public function SupportPastSchedulesAction()
    {
        $pastschedules = getSupportPastSchedules();
        return new JsonResponse($pastschedules);
    }
    /**
     * @Route("/schedules/future", name="api_schedules_list_future")
     * @Method({"GET"})
     */
    public function SupportFutureSchedulesAction()
    {
        $futureschedules = getSupportFutureSchedules();
        return new JsonResponse($futureschedules);
    }
    /**
     * @Route("/schedules/{slug}", name="api_schedules_open")
     * @Method({"GET", "PUT"})
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function ExactScheduleAction(Request $request, $slug)
    {   //Only handles data on a 'PUT'
        $data = json_decode($request->getContent(), true);
        $em = $this->getDoctrine()->getManager();
        $schedule = $em->getRepository('AppBundle:Schedule')->findOneBy(['id' => $data['id']]);
        $schedule->setMessage($data['message'])->setPriority($data['priority']);
        $em->flush();

        //Handles Data on a GET request

        $schedule = $em->getRepository('AppBundle:Schedule')->findOneBy(['id' => $slug]);
        $details = $schedule->getDetails();
        return new JsonResponse($details);
    }
    /**
     * @Route("/schedules/{slug}", name="api_schedules_delete")
     * @Method("DELETE")
     * @param $slug
     */
    public function DeleteScheduleAction($slug)
    {   //Only matches on DELETE
        $em = $this->getDoctrine()->getManager();
        $schedule = $em->getRepository('AppBundle:Schedule')->findBy(['id' => $slug]);
        $em->remove($schedule);
        $em->flush();
    }
    /**
     * @Route("/messages", name="api_messages_list")
     * @Method({"GET", "POST"})
     */
    public function SupportMessagesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $messages = $em->getRepository('AppBundle:Ps0oMessage')->findAll();
        return new JsonResponse($messages);
    }
    /**
     * @Route("/messages/read", name="api_messages_list_read")
     * @Method({"GET"})
     */
    public function SupportMessagesReadAction()
    {
        $readmessages = getSupportReadMessages();
        return new JsonResponse($readmessages);
    }
    /**
     * @Route("/messages/unread", name="api_messages_list_unread")
     * @Method({"GET"})
     */
    public function SupportMessagesUnreadAction()
    {
        $unreadmessages = getSupportUnreadMessages();
        return new JsonResponse($unreadmessages);
    }
    /**
     * @Route("/messages/{slug}", name="api_messages_open")
     * @Method({"GET", "PUT"})
     * @param Request $request
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function ExactMessagesAction(Request $request, $slug)
    {   //Only handles data on a 'PUT'
        $data = json_decode($request->getContent(), true);
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('AppBundle:Messages')->findBy(['id' => $data['id']]);
        $message->setMessage($data['message'])->setPriority($data['priority']);
        $em->flush();

        //Handles Data on a GET request
        $message = OpenSupportMessages($slug);
        return new JsonResponse($message);
    }
    /**
     * @Route("/messages/{slug}", name="api_messages_delete")
     * @Method("DELETE")
     * @param $slug
     */
    public function DeleteMessageAction($slug)
    {   //Only matches on DELETE
        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('AppBundle:Messages')->findBy(['id' => $slug]);
        $em->remove($message);
        $em->flush();
    }
}