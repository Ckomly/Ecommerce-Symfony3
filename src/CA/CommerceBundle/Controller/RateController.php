<?php

namespace CA\CommerceBundle\Controller;

use CA\CommerceBundle\Entity\Product;
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
        if(!$this->getUser()){
          return $this->render('CACommerceBundle:Session:login.html.twig', array(
              'last_username' => '',
              'error' => array('action' => 'create','entity' => 'rate'),
          ));
        }

        $em = $this->getDoctrine()->getManager();
        $rate = new Rate();
        $form = $this->createForm('CA\CommerceBundle\Form\RateType', $rate);
        $form->handleRequest($request);;
        $type = $request->query->get('type');
        $id = $request->query->get('id');
        $product = $em->getRepository('CACommerceBundle:Product')->find($id);

        if ($form->isSubmitted() && $form->isValid()) {
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
            'product' => $product,
            'rate' => $rate,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a rate entity.
     *
     */
    public function showAction($id)
    {
        $product = new Product();
        $em = $this->getDoctrine()->getManager();
        $product = $em->getRepository('CACommerceBundle:Product')->find($id);

        if ($product === null) {
          throw new NotFoundHttpException("This product doesn't have rates.");
        }

        $listRates = $em->getRepository('CACommerceBundle:Rate')->findBy(array('product' => $product));

        return $this->render('rate/show.html.twig', array(
            'product' => $product,
            'listRates' =>$listRates
        ));
    }

    /**
     * Displays a form to edit an existing rate entity.
     *
     */
    public function editAction(Request $request, Rate $rate)
    {
        if(!$this->getUser()){
          return $this->render('CACommerceBundle:Session:login.html.twig', array(
              'last_username' => '',
              'error' => array('action' => 'edit','entity' => 'rate'),
          ));
        }
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
        if(!$this->getUser()){
          return $this->render('CACommerceBundle:Session:login.html.twig', array(
              'last_username' => '',
              'error' => array('action' => 'delete','entity' => 'rate'),
          ));
        }
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
