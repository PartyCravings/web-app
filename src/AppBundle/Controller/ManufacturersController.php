<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Manufacturers;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Manufacturer controller.
 *
 * @Route("manufacturers")
 */
class ManufacturersController extends Controller
{
    /**
     * Lists all manufacturer entities.
     *
     * @Route("/", name="manufacturers_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $manufacturers = $em->getRepository('AppBundle:Manufacturers')->findAll();

        return $this->render('manufacturers/index.html.twig', array(
            'manufacturers' => $manufacturers,
        ));
    }

    /**
     * Creates a new manufacturer entity.
     *
     * @Route("/new", name="manufacturers_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $manufacturer = new Manufacturer();
        $form = $this->createForm('AppBundle\Form\ManufacturersType', $manufacturer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($manufacturer);
            $em->flush();

            return $this->redirectToRoute('manufacturers_show', array('id' => $manufacturer->getId()));
        }

        return $this->render('manufacturers/new.html.twig', array(
            'manufacturer' => $manufacturer,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a manufacturer entity.
     *
     * @Route("/{id}", name="manufacturers_show")
     * @Method("GET")
     */
    public function showAction(Manufacturers $manufacturer)
    {
        $deleteForm = $this->createDeleteForm($manufacturer);

        return $this->render('manufacturers/show.html.twig', array(
            'manufacturer' => $manufacturer,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing manufacturer entity.
     *
     * @Route("/{id}/edit", name="manufacturers_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Manufacturers $manufacturer)
    {
        $deleteForm = $this->createDeleteForm($manufacturer);
        $editForm = $this->createForm('AppBundle\Form\ManufacturersType', $manufacturer);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('manufacturers_edit', array('id' => $manufacturer->getId()));
        }

        return $this->render('manufacturers/edit.html.twig', array(
            'manufacturer' => $manufacturer,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a manufacturer entity.
     *
     * @Route("/{id}", name="manufacturers_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Manufacturers $manufacturer)
    {
        $form = $this->createDeleteForm($manufacturer);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($manufacturer);
            $em->flush();
        }

        return $this->redirectToRoute('manufacturers_index');
    }

    /**
     * Creates a form to delete a manufacturer entity.
     *
     * @param Manufacturers $manufacturer The manufacturer entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Manufacturers $manufacturer)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('manufacturers_delete', array('id' => $manufacturer->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
