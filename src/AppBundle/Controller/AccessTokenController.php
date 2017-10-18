<?php

namespace AppBundle\Controller;

use AppBundle\Entity\AccessToken;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Accesstoken controller.
 *
 * @Route("accesstoken")
 */
class AccessTokenController extends Controller
{
    /**
     * Lists all accessToken entities.
     *
     * @Route("/", name="accesstoken_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $accessTokens = $em->getRepository('AppBundle:AccessToken')->findAll();

        return $this->render('accesstoken/index.html.twig', array(
            'accessTokens' => $accessTokens,
        ));
    }

    /**
     * Creates a new accessToken entity.
     *
     * @Route("/new", name="accesstoken_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $accessToken = new Accesstoken();
        $form = $this->createForm('AppBundle\Form\AccessTokenType', $accessToken);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($accessToken);
            $em->flush();

            return $this->redirectToRoute('accesstoken_show', array('id' => $accessToken->getId()));
        }

        return $this->render('accesstoken/new.html.twig', array(
            'accessToken' => $accessToken,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a accessToken entity.
     *
     * @Route("/{id}", name="accesstoken_show")
     * @Method("GET")
     */
    public function showAction(AccessToken $accessToken)
    {
        $deleteForm = $this->createDeleteForm($accessToken);

        return $this->render('accesstoken/show.html.twig', array(
            'accessToken' => $accessToken,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing accessToken entity.
     *
     * @Route("/{id}/edit", name="accesstoken_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, AccessToken $accessToken)
    {
        $deleteForm = $this->createDeleteForm($accessToken);
        $editForm = $this->createForm('AppBundle\Form\AccessTokenType', $accessToken);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('accesstoken_edit', array('id' => $accessToken->getId()));
        }

        return $this->render('accesstoken/edit.html.twig', array(
            'accessToken' => $accessToken,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a accessToken entity.
     *
     * @Route("/{id}", name="accesstoken_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, AccessToken $accessToken)
    {
        $form = $this->createDeleteForm($accessToken);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($accessToken);
            $em->flush();
        }

        return $this->redirectToRoute('accesstoken_index');
    }

    /**
     * Creates a form to delete a accessToken entity.
     *
     * @param AccessToken $accessToken The accessToken entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(AccessToken $accessToken)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('accesstoken_delete', array('id' => $accessToken->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
