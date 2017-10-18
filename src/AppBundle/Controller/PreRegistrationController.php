<?php

namespace AppBundle\Controller;

use AppBundle\Entity\PreRegistration;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Preregistration controller.
 *
 * @Route("preregistration")
 */
class PreRegistrationController extends Controller
{
    /**
     * Lists all preRegistration entities.
     *
     * @Route("/", name="preregistration_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $preRegistrations = $em->getRepository('AppBundle:PreRegistration')->findAll();

        return $this->render('preregistration/index.html.twig', array(
            'preRegistrations' => $preRegistrations,
        ));
    }

    /**
     * Creates a new preRegistration entity.
     *
     * @Route("/new", name="preregistration_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $preRegistration = new Preregistration();
        $form = $this->createForm('AppBundle\Form\PreRegistrationType', $preRegistration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($preRegistration);
            $em->flush();

            return $this->redirectToRoute('preregistration_show', array('id' => $preRegistration->getId()));
        }

        return $this->render('preregistration/new.html.twig', array(
            'preRegistration' => $preRegistration,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a preRegistration entity.
     *
     * @Route("/{id}", name="preregistration_show")
     * @Method("GET")
     */
    public function showAction(PreRegistration $preRegistration)
    {
        $deleteForm = $this->createDeleteForm($preRegistration);

        return $this->render('preregistration/show.html.twig', array(
            'preRegistration' => $preRegistration,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing preRegistration entity.
     *
     * @Route("/{id}/edit", name="preregistration_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, PreRegistration $preRegistration)
    {
        $deleteForm = $this->createDeleteForm($preRegistration);
        $editForm = $this->createForm('AppBundle\Form\PreRegistrationType', $preRegistration);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('preregistration_edit', array('id' => $preRegistration->getId()));
        }

        return $this->render('preregistration/edit.html.twig', array(
            'preRegistration' => $preRegistration,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a preRegistration entity.
     *
     * @Route("/{id}", name="preregistration_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, PreRegistration $preRegistration)
    {
        $form = $this->createDeleteForm($preRegistration);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($preRegistration);
            $em->flush();
        }

        return $this->redirectToRoute('preregistration_index');
    }

    /**
     * Creates a form to delete a preRegistration entity.
     *
     * @param PreRegistration $preRegistration The preRegistration entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PreRegistration $preRegistration)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('preregistration_delete', array('id' => $preRegistration->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
