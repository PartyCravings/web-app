<?php

namespace PartyCravings\ClientAreaBundle\Controller\Api;

use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Customizer;

/**
 * @Route("/api/user")
 */
class PartyCreatorController extends Controller
{
    /**
     * @Route("/event/{id}", name="api_event_save")
     * @param Request $request
     * @param $id
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function eventAction(Request $request, $id)
    {

        $method = $request->getMethod();
        $content = $request->getContent();
        $data = json_decode($content, true);
        $eventcr = $this->getEntityManager()->getRepository('AppBundle:EventCenter')->findOneBy(['id' => $id]);
        if (!$eventcr) {
            return $this->throwApiNotFound('Hi there, that event centre exists not!');
        }


        //Only handles data on a 'PUT'
        if ($method === 'PUT') {
            $cache = new FilesystemAdapter();
            $placeholder = $cache->getItem('customizer__' . $data['partyid']);
            if (!$placeholder->isHit()) {
                $customizer = $this->getEntityManager()->getRepository('AppBundle:Customizer')->findOneBy(['id' => $data['partyid']]);
                if (!$customizer) {
                    $placeholder->set(['partynotfound' => $data['partyid']]);
                    $placeholder->expiresAfter(1);
                    $cache->save($placeholder);
                    return $this->throwApiUncachedNotFound('Hi there, You haven\'t created a party 9');
                } else {
                    $customizer->setEventCr($data['id']);
                    $customizer->setDrinks($data['priority']);
                    $this->getEntityManager()->flush();
                }
            } else return $this->throwApiUncachedNotFound('Hi there, You haven\'t created a party');
        } //Handles Data on a GET request
        elseif ($method === 'GET') {
            $cache = new FilesystemAdapter();
            $placeholder = $cache->getItem('eventcr_details_' . $id);
            if (!$placeholder->isHit()) {
                $details = $eventcr->getDescription();
                $details1 = $eventcr->getId();
                $alldetails = [[$details], [$details1]];
                $placeholder->set(['alldetails' => $alldetails]);
                $placeholder->expiresAfter(3600);
                $cache->save($placeholder);
            }
            $alldetails = $placeholder->get();
            $response = new JsonResponse($alldetails);
            $response->setSharedMaxAge(600);
            return $response;
        } //Handles Data on a DELETE request
        elseif ($method === 'DELETE') {
            $cache = new FilesystemAdapter();
            $placeholder = $cache->getItem('customizer_' . $data['partyid']);
            if (!$placeholder->isHit()) {
                $customizer = $this->getEntityManager()->getRepository('AppBundle:Customizer')->findOneBy(['id' => $data['id']]);
                if (!$customizer) {
                    $placeholder->set(['partynotfound' => $data['partyid']]);
                    $placeholder->expiresAfter(600);
                    $cache->save($placeholder);
                    return $this->throwApiUncachedNotFound('That party was never created either');
                } else {
                    $customizer->setEventCr(null);
                    $this->getEntityManager()->flush();
                    return new JsonResponse(null, 204);
                }
            } else return $this->throwApiUncachedNotFound('That party was never created either');
        } //Forbids Other HTTP Methods
        else {
            return $this->throwApiMethodDenied('Unsupported HTTP method. Please use a PUT, GET or DELETE');
        }

    }


    /**
     * @Route("/event", name="api_event_list")
     * @Method("GET")
     * @param Request $request
     * @return JsonResponse
     */
    public function showEventAction(Request $request)
    {
        $method = $request->getMethod();
        $events = $this->getEntityManager()->getRepository('AppBundle:EventCenter')->findAll();
        if (!$events){
            return $this->throwApiNotFound('There are currently no available venues');

        }
        if ($method === 'GET') {
            $cache = new FilesystemAdapter();
            $placeholder = $cache->getItem('all_event');
            $cache->clear();
            if (!$placeholder->isHit()){
                foreach ($events as $event){
                $details['description'] = $event->getDescription();
                $details['id'] = $event->getId();
                $alldetails[$details['id']] = $details;
                }
                if(isset($alldetails)){
                $placeholder->set(['details' => $alldetails]);
                $placeholder->expiresAfter(3600);
                $cache->save($placeholder);
                }
            }
            $alldetails = $placeholder->get();
            $response = new JsonResponse($alldetails);
            $response->setSharedMaxAge(600);
            return $response;
        }
        else{
            return $this->throwApiMethodDenied('Unsupported HTTP method. Please use a GET');
        }
    }

    /**
     * @Route("/drink/{id}", name="api_drink_save")
     * @Method({"GET", "PUT", "DELETE"})
     * @param Request $request
     * @param $id
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function DrinkAction(Request $request, $id)
    {
        $method = $request->getMethod();
        $content = $request->getContent();

        //Handles Data on a PUT Request
        if ($method === 'PUT') {
            $data = json_decode($content, true);
            $customizer = $this->getEntityManager()->getRepository('AppBundle:Customizer')->findOneBy(['id' => $data['id']]);
            if (!$customizer){
                $this->createNotFoundException('Hi there!, you don\'t have a party yet!');
            }
            $customizer->setAddress($data['id']);
            $this->getEntityManager()->flush();
        }

        //Handles Data on a GET Request
        elseif ($method === 'GET') {
            $drink = $this->getEntityManager()->getRepository('AppBundle:Drinks')->findOneBy(['id' => $id]);
            if (!$drink){
                return $this->throwApiNotFound('We know nothing of that drink');
            }
            $details = $drink->getId();
            return new JsonResponse($details);
        }

        //Handles Data on a DELETE Request
        elseif ($method === 'DELETE'){
            $customizer = $this->getEntityManager()->getRepository('AppBundle:Customizer')->findOneBy(['id' => $id]);
            if (!$customizer){
                $this->createNotFoundException('Hi there!, you don\'t have a party yet!');
            }
            $customizer->setDrink(null);
            $this->getEntityManager()->flush();
            return new JsonResponse(null, 204);
        }
        else{ return $this->throwApiMethodDenied('Unsupported HTTP method');
        }
    }
    /**
     * @Route("/eventcr", name="api_eventcr_list")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function showDrinkAction()
    {
        $drinks = $this->getEntityManager()->getRepository('AppBundle:Drinks')->findAll();
        if (!$drinks){
            $this->createNotFoundException('Thing is, we just ran out of drinks, check back!');
        }
        return new JsonResponse($drinks);
    }


    /**
     * @Route("/customizer/{id}", name="api_customizer_save")
     * @Method({"GET", "PUT", "DELETE", "POST"})
     * @param Request $request
     * @param $id
     * @return  \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function CustomizerAction(Request $request, $id)
    {
        $method = $request->getMethod();
        $content = $request->getContent();

        //Handles Data on a PUT Request
        if ($method === 'PUT') {
            $data = json_decode($content, true);
            $customizer = $this->getEntityManager()->getRepository('AppBundle:Customizer')->findOneBy(['id' => $data['id']]);
            if (!$customizer){
                $this->createNotFoundException('Hi there!, you don\'t have a party yet!');
            }
            $customizer->setNewDetail($data['id']);
            $this->getEntityManager()->flush();
        }

        //Handles Data on a GET Request
        elseif ($method === 'GET') {
            $customizer = $this->getEntityManager()->getRepository('AppBundle:Customizer')->findOneBy(['id' => $id]);
            if (!$customizer){
                $this->createNotFoundException('We know nothing of that party');
            }
            $details = $customizer->getId();
            return new JsonResponse($details);
        }

        //Handles Data on a DELETE Request
        elseif ($method === 'DELETE'){
            $customizer = $this->getEntityManager()->getRepository('AppBundle:Customizer')->findOneBy(['id' => $id]);
            if (!$customizer){
                $this->createNotFoundException('Hi there!, you don\'t have a party yet!');
            };
            $this->getEntityManager()->remove($customizer);
            $this->getEntityManager()->flush();
            return new JsonResponse('You just deleted that party', 204);
        }
        else{

            $data = json_decode($content, true);
            $customizer = new Customizer();
            $customizer->setName($data['party_name']);
            $this->getEntityManager()->persist($customizer);
            $this->getEntityManager()->flush($customizer);
            $customizer->getId();
            return new JsonResponse('New party created with id:'.$customizer->getId().'and name:'.$customizer->getName());
        }
    }
    /**
     * @param $message
     * @return JsonResponse
     */
    protected function throwApiNotFound($message)
    {
        $exception = $this->createNotFoundException($message);
        $response =   new JsonResponse(
            $exception->getMessage(),
            $exception->getStatusCode(),
            $exception->getHeaders()
        );
        $response->setSharedMaxAge(300);
        $response->headers->set('Content-Type', 'application/problem+json');
        return $response;
    }
    /**
     * @param $message
     * @return JsonResponse
     */
    protected function throwApiUncachedNotFound($message)
    {
        $exception = $this->createNotFoundException($message);
        $response =   new JsonResponse(
            $exception->getMessage(),
            $exception->getStatusCode(),
            $exception->getHeaders()
        );
        $response->headers->set('Content-Type', 'application/problem+json');
        return $response;
    }

    /**
     * @param $message
     * @return JsonResponse
     */
    protected function throwApiAccessDenied($message)
    {
        $exception = $this->createAccessDeniedException($message);
        $response = new JsonResponse(
            $exception->getMessage(),
            403
        );
        $response->setSharedMaxAge(300);
        $response->headers->set('Content-Type', 'application/problem+json');
        return $response;
    }
    protected function throwApiMethodDenied($message)
    {
        $exception = $this->createNotFoundException($message);
        $response = new JsonResponse(
            $exception->getMessage(),
            405,
            $exception->getHeaders()
        );
        $response->setSharedMaxAge(300);
        $response->headers->set('Content-Type', 'application/problem+json');
        return $response;
    }

    /**
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        return $this->get('doctrine.orm.entity_manager');
    }

}