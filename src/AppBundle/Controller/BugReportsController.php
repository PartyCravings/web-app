<?php

namespace AppBundle\Controller;

use AppBundle\Entity\BugReports;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Bugreport controller.
 *
 * @Route("bugreports")
 */
class BugReportsController extends Controller
{
    /**
     * Lists all bugReport entities.
     *
     * @Route("/", name="bugreports_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bugReports = $em->getRepository('AppBundle:BugReports')->findAll();

        return $this->render('bugreports/index.html.twig', array(
            'bugReports' => $bugReports,
        ));
    }

    /**
     * Creates a new bugReport entity.
     *
     * @Route("/new", name="bugreports_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $bugReport = new Bugreport();
        $form = $this->createForm('AppBundle\Form\BugReportsType', $bugReport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($bugReport);
            $em->flush();

            return $this->redirectToRoute('bugreports_show', array('id' => $bugReport->getId()));
        }

        return $this->render('bugreports/new.html.twig', array(
            'bugReport' => $bugReport,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a bugReport entity.
     *
     * @Route("/{id}", name="bugreports_show")
     * @Method("GET")
     */
    public function showAction(BugReports $bugReport)
    {
        $deleteForm = $this->createDeleteForm($bugReport);

        return $this->render('bugreports/show.html.twig', array(
            'bugReport' => $bugReport,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bugReport entity.
     *
     * @Route("/{id}/edit", name="bugreports_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, BugReports $bugReport)
    {
        $deleteForm = $this->createDeleteForm($bugReport);
        $editForm = $this->createForm('AppBundle\Form\BugReportsType', $bugReport);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bugreports_edit', array('id' => $bugReport->getId()));
        }

        return $this->render('bugreports/edit.html.twig', array(
            'bugReport' => $bugReport,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bugReport entity.
     *
     * @Route("/{id}", name="bugreports_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, BugReports $bugReport)
    {
        $form = $this->createDeleteForm($bugReport);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bugReport);
            $em->flush();
        }

        return $this->redirectToRoute('bugreports_index');
    }

    /**
     * Creates a form to delete a bugReport entity.
     *
     * @param BugReports $bugReport The bugReport entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(BugReports $bugReport)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bugreports_delete', array('id' => $bugReport->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
