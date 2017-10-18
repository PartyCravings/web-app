<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Accounts;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Account controller.
 *
 * @Route("accounts")
 */
class AccountsController extends Controller
{
    /**
     * Lists all account entities.
     *
     * @Route("/", name="accounts_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accounts = $em->getRepository('AppBundle:Accounts')->findAll();

        return $this->render('accounts/index.html.twig', array(
            'accounts' => $accounts,
        ));
    }

    /**
     * Creates a new account entity.
     *
     * @Route("/new", name="accounts_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $account = new Account();
        $form = $this->createForm('AppBundle\Form\AccountsType', $account);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($account);
            $em->flush();

            return $this->redirectToRoute('accounts_show', array('id' => $account->getId()));
        }

        return $this->render('accounts/new.html.twig', array(
            'account' => $account,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a account entity.
     *
     * @Route("/{id}", name="accounts_show")
     * @Method("GET")
     */
    public function showAction(Accounts $account)
    {
        $deleteForm = $this->createDeleteForm($account);

        return $this->render('accounts/show.html.twig', array(
            'account' => $account,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing account entity.
     *
     * @Route("/{id}/edit", name="accounts_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Accounts $account)
    {
        $deleteForm = $this->createDeleteForm($account);
        $editForm = $this->createForm('AppBundle\Form\AccountsType', $account);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('accounts_edit', array('id' => $account->getId()));
        }

        return $this->render('accounts/edit.html.twig', array(
            'account' => $account,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a account entity.
     *
     * @Route("/{id}", name="accounts_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Accounts $account)
    {
        $form = $this->createDeleteForm($account);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($account);
            $em->flush();
        }

        return $this->redirectToRoute('accounts_index');
    }

    /**
     * Creates a form to delete a account entity.
     *
     * @param Accounts $account The account entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Accounts $account)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accounts_delete', array('id' => $account->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
