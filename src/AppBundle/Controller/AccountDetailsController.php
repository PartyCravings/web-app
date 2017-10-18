<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AccountDetails;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Accountdetail controller.
 *
 * @Route("accountdetails")
 */
class AccountDetailsController extends Controller
{
    /**
     * Lists all accountDetail entities.
     *
     * @Route("/", name="accountdetails_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accountDetails = $em->getRepository('AppBundle:AccountDetails')->findAll();

        return $this->render('accountdetails/index.html.twig', array(
            'accountDetails' => $accountDetails,
        ));
    }

    /**
     * Creates a new accountDetail entity.
     *
     * @Route("/new", name="accountdetails_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $accountDetail = new Accountdetail();
        $form = $this->createForm('AppBundle\Form\AccountDetailsType', $accountDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($accountDetail);
            $em->flush();

            return $this->redirectToRoute('accountdetails_show', array('id' => $accountDetail->getId()));
        }

        return $this->render('accountdetails/new.html.twig', array(
            'accountDetail' => $accountDetail,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a accountDetail entity.
     *
     * @Route("/{id}", name="accountdetails_show")
     * @Method("GET")
     */
    public function showAction(AccountDetails $accountDetail)
    {
        $deleteForm = $this->createDeleteForm($accountDetail);

        return $this->render('accountdetails/show.html.twig', array(
            'accountDetail' => $accountDetail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing accountDetail entity.
     *
     * @Route("/{id}/edit", name="accountdetails_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, AccountDetails $accountDetail)
    {
        $deleteForm = $this->createDeleteForm($accountDetail);
        $editForm = $this->createForm('AppBundle\Form\AccountDetailsType', $accountDetail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('accountdetails_edit', array('id' => $accountDetail->getId()));
        }

        return $this->render('accountdetails/edit.html.twig', array(
            'accountDetail' => $accountDetail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a accountDetail entity.
     *
     * @Route("/{id}", name="accountdetails_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, AccountDetails $accountDetail)
    {
        $form = $this->createDeleteForm($accountDetail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($accountDetail);
            $em->flush();
        }

        return $this->redirectToRoute('accountdetails_index');
    }

    /**
     * Creates a form to delete a accountDetail entity.
     *
     * @param AccountDetails $accountDetail The accountDetail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AccountDetails $accountDetail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accountdetails_delete', array('id' => $accountDetail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
