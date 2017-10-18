<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Carrier;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Carrier controller.
 *
 * @Route("carrier")
 */
class CarrierController extends Controller
{
    /**
     * Lists all carrier entities.
     *
     * @Route("/", name="carrier_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $carriers = $em->getRepository('AppBundle:Carrier')->findAll();

        return $this->render('carrier/index.html.twig', array(
            'carriers' => $carriers,
        ));
    }

    /**
     * Creates a new carrier entity.
     *
     * @Route("/new", name="carrier_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $carrier = new Carrier();
        $form = $this->createForm('AppBundle\Form\CarrierType', $carrier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($carrier);
            $em->flush();

            return $this->redirectToRoute('carrier_show', array('id' => $carrier->getId()));
        }

        return $this->render('carrier/new.html.twig', array(
            'carrier' => $carrier,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a carrier entity.
     *
     * @Route("/{id}", name="carrier_show")
     * @Method("GET")
     */
    public function showAction(Carrier $carrier)
    {
        $deleteForm = $this->createDeleteForm($carrier);

        return $this->render('carrier/show.html.twig', array(
            'carrier' => $carrier,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing carrier entity.
     *
     * @Route("/{id}/edit", name="carrier_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Carrier $carrier)
    {
        $deleteForm = $this->createDeleteForm($carrier);
        $editForm = $this->createForm('AppBundle\Form\CarrierType', $carrier);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('carrier_edit', array('id' => $carrier->getId()));
        }

        return $this->render('carrier/edit.html.twig', array(
            'carrier' => $carrier,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a carrier entity.
     *
     * @Route("/{id}", name="carrier_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Carrier $carrier)
    {
        $form = $this->createDeleteForm($carrier);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($carrier);
            $em->flush();
        }

        return $this->redirectToRoute('carrier_index');
    }

    /**
     * Creates a form to delete a carrier entity.
     *
     * @param Carrier $carrier The carrier entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Carrier $carrier)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('carrier_delete', array('id' => $carrier->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
