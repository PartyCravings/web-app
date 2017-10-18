<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Affiliates;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Affiliate controller.
 *
 * @Route("affiliates")
 */
class AffiliatesController extends Controller
{
    /**
     * Lists all affiliate entities.
     *
     * @Route("/", name="affiliates_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $affiliates = $em->getRepository('AppBundle:Affiliates')->findAll();

        return $this->render('affiliates/index.html.twig', array(
            'affiliates' => $affiliates,
        ));
    }

    /**
     * Creates a new affiliate entity.
     *
     * @Route("/new", name="affiliates_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $affiliate = new Affiliate();
        $form = $this->createForm('AppBundle\Form\AffiliatesType', $affiliate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($affiliate);
            $em->flush();

            return $this->redirectToRoute('affiliates_show', array('id' => $affiliate->getId()));
        }

        return $this->render('affiliates/new.html.twig', array(
            'affiliate' => $affiliate,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a affiliate entity.
     *
     * @Route("/{id}", name="affiliates_show")
     * @Method("GET")
     */
    public function showAction(Affiliates $affiliate)
    {
        $deleteForm = $this->createDeleteForm($affiliate);

        return $this->render('affiliates/show.html.twig', array(
            'affiliate' => $affiliate,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing affiliate entity.
     *
     * @Route("/{id}/edit", name="affiliates_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Affiliates $affiliate)
    {
        $deleteForm = $this->createDeleteForm($affiliate);
        $editForm = $this->createForm('AppBundle\Form\AffiliatesType', $affiliate);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('affiliates_edit', array('id' => $affiliate->getId()));
        }

        return $this->render('affiliates/edit.html.twig', array(
            'affiliate' => $affiliate,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a affiliate entity.
     *
     * @Route("/{id}", name="affiliates_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Affiliates $affiliate)
    {
        $form = $this->createDeleteForm($affiliate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($affiliate);
            $em->flush();
        }

        return $this->redirectToRoute('affiliates_index');
    }

    /**
     * Creates a form to delete a affiliate entity.
     *
     * @param Affiliates $affiliate The affiliate entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Affiliates $affiliate)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('affiliates_delete', array('id' => $affiliate->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
