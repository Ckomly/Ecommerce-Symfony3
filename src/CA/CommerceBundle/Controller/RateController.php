<?php

namespace CA\CommerceBundle\Controller;

use CA\CommerceBundle\Entity\Rate;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Rate controller.
 *
 */
class RateController extends Controller
{
    /**
     * Lists all rate entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $rates = $em->getRepository('CACommerceBundle:Rate')->findAll();

        return $this->render('rate/index.html.twig', array(
            'rates' => $rates,
        ));
    }

    /**
     * Creates a new rate entity.
     *
     */
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $rate = new Rate();
        $form = $this->createForm('CA\CommerceBundle\Form\RateType', $rate);
        $form->handleRequest($request);;
        $type = $request->query->get('type');

        if ($form->isSubmitted() && $form->isValid()) {
            $id = $request->query->get('id');
            $name = $this->getUser()->getUsername();
            if ($type == 'product'){
              $product = $em->getRepository('CACommerceBundle:Product')->find($id);
              //set Product value.
              $rate->setProduct($product);
            }
            else{
              $user = $em->getRepository('CACommerceBundle:User')->find($id);
              //set User value.
              $rate->setUser($user);
            }
            //set Date value.
            $rate->setDate(new \ datetime());
            //set Name value.
            $rate->setName($name);

            $em->persist($rate);
            $em->flush();

            if ($type == 'product'){
              return $this->redirectToRoute('product_show', array('id' => $product->getId()));
            }
            else{
              return $this->redirectToRoute('user_show', array('id' => $user->getId()));
            }

        }

        return $this->render('rate/new.html.twig', array(
            'rate' => $rate,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rate entity.
     *
     */
    public function showAction(Rate $rate)
    {
        $deleteForm = $this->createDeleteForm($rate);

        return $this->render('rate/show.html.twig', array(
            'rate' => $rate,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing rate entity.
     *
     */
    public function editAction(Request $request, Rate $rate)
    {
        $deleteForm = $this->createDeleteForm($rate);
        $editForm = $this->createForm('CA\CommerceBundle\Form\RateType', $rate);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('rate_edit', array('id' => $rate->getId()));
        }

        return $this->render('rate/edit.html.twig', array(
            'rate' => $rate,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a rate entity.
     *
     */
    public function deleteAction(Request $request, Rate $rate)
    {
        $form = $this->createDeleteForm($rate);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($rate);
            $em->flush();
        }

        return $this->redirectToRoute('rate_index');
    }

    /**
     * Creates a form to delete a rate entity.
     *
     * @param Rate $rate The rate entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Rate $rate)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('rate_delete', array('id' => $rate->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
