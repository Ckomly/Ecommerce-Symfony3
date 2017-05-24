<?php

namespace CA\CommerceBundle\Controller;

use CA\CommerceBundle\Entity\Product;
use CA\CommerceBundle\Entity\Bid;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Bid controller.
 *
 */
class BidController extends Controller
{
    /**
     * Lists all bid entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $bids = $em->getRepository('CACommerceBundle:Bid')->findAll();

        return $this->render('bid/index.html.twig', array(
            'bids' => $bids,
        ));
    }

    /**
     * Finds and displays a bid entity.
     *
     */
    public function showAction(Bid $bid)
    {
        $deleteForm = $this->createDeleteForm($bid);

        return $this->render('bid/show.html.twig', array(
            'bid' => $bid,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing bid entity.
     *
     */
    public function editAction(Request $request, Bid $bid)
    {
        $deleteForm = $this->createDeleteForm($bid);
        $editForm = $this->createForm('CA\CommerceBundle\Form\BidType', $bid);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bid_edit', array('id' => $bid->getId()));
        }

        return $this->render('bid/edit.html.twig', array(
            'bid' => $bid,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a bid entity.
     *
     */
    public function deleteAction(Request $request, Bid $bid)
    {
        $form = $this->createDeleteForm($bid);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($bid);
            $em->flush();
        }

        return $this->redirectToRoute('bid_index');
    }

    /**
     * Creates a form to delete a bid entity.
     *
     * @param Bid $bid The bid entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Bid $bid)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bid_delete', array('id' => $bid->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
