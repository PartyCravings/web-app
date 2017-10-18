<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Campaigns;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Campaign controller.
 *
 * @Route("campaigns")
 */
class CampaignsController extends Controller
{
    /**
     * Lists all campaign entities.
     *
     * @Route("/", name="campaigns_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $campaigns = $em->getRepository('AppBundle:Campaigns')->findAll();

        return $this->render('campaigns/index.html.twig', array(
            'campaigns' => $campaigns,
        ));
    }

    /**
     * Creates a new campaign entity.
     *
     * @Route("/new", name="campaigns_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $campaign = new Campaign();
        $form = $this->createForm('AppBundle\Form\CampaignsType', $campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($campaign);
            $em->flush();

            return $this->redirectToRoute('campaigns_show', array('id' => $campaign->getId()));
        }

        return $this->render('campaigns/new.html.twig', array(
            'campaign' => $campaign,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a campaign entity.
     *
     * @Route("/{id}", name="campaigns_show")
     * @Method("GET")
     */
    public function showAction(Campaigns $campaign)
    {
        $deleteForm = $this->createDeleteForm($campaign);

        return $this->render('campaigns/show.html.twig', array(
            'campaign' => $campaign,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing campaign entity.
     *
     * @Route("/{id}/edit", name="campaigns_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Campaigns $campaign)
    {
        $deleteForm = $this->createDeleteForm($campaign);
        $editForm = $this->createForm('AppBundle\Form\CampaignsType', $campaign);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('campaigns_edit', array('id' => $campaign->getId()));
        }

        return $this->render('campaigns/edit.html.twig', array(
            'campaign' => $campaign,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a campaign entity.
     *
     * @Route("/{id}", name="campaigns_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Campaigns $campaign)
    {
        $form = $this->createDeleteForm($campaign);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($campaign);
            $em->flush();
        }

        return $this->redirectToRoute('campaigns_index');
    }

    /**
     * Creates a form to delete a campaign entity.
     *
     * @param Campaigns $campaign The campaign entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Campaigns $campaign)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('campaigns_delete', array('id' => $campaign->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
