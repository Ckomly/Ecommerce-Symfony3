<?php

namespace CA\CommerceBundle\Controller;

use CA\CommerceBundle\Entity\Bid;
use CA\CommerceBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Product controller.
 *
 */
class ProductController extends Controller
{
    /**
     * Lists all product entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('CACommerceBundle:Product')->findAll();

        return $this->render('product/index.html.twig', array(
            'products' => $products,
        ));
    }

    /**
     * Creates a new product entity.
     *
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $product->setUser($this->getUser());
        $form = $this->createForm('CA\CommerceBundle\Form\NewProductType', $product);
        //reception de la method POST.
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $params = $request->request->get('ca_commercebundle_product');
          //Define endingdate.
            $time = new \DateTime();
            $interval = new \DateInterval($params['endingdate']);
            $newtime = $time->add($interval);
          //Set some product informations who were not sent by the form.
            $product->setDate(new \DateTime());
            $product->setPrice($product->getPricestart());
            $product->setEndingdate($newtime);
          //Set and send the querries.
            $em->persist($product);
            $em->flush();

            return $this->redirectToRoute('product_show', array('id' => $product));
        }

        return $this->render('product/new.html.twig', array(
            'product' => $product,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a product entity.
     *
     */
    public function showAction(Product $product)
    {
        $errorMessage = "enter the amount of your bid.";
      //Declare new Bid object that will be send in DB.
        $bid = new Bid();
      //Declare new request, without it we can't send querries to DB.
        $request = Request::createFromGlobals();
        $em = $this->getDoctrine()->getManager();
        $rates = $em->getRepository('CACommerceBundle:Rate')->findByProduct($product, array('id' => 'desc'));
        $bids = $em->getRepository('CACommerceBundle:Bid')->findByProduct($product, array('id' => 'desc'));
      //Generate Bid form to enter the amount of the bid.
        $form = $this->createForm('CA\CommerceBundle\Form\BidType', $bid);
        $form->handleRequest($request);
        $deleteForm = $this->createDeleteForm($product);

        if ($form->isSubmitted() && $form->isValid()) {
          $newprice = $product->getPrice() + $bid->getAmount();
          if ($newprice >= $product->getBuyout()){
            return $this->render('product/show.html.twig', array(
                'error' => "you can't bis higher than the price max.",
                'product' => $product,
                'rates' => $rates,
                'delete_form' => $deleteForm->createView(),
                'bid' => $bid,
                'form' => $form->createView(),
            ));
          }
          $user = $this->getUser();
          //Set bid informations.
            $bid->setDate(new \DateTime());
            $bid->setProduct($product);
            $bid->setUser($user);
          //Set new product price.
            $product->setPrice($newprice);
          //Set the querries.
            $em->persist($bid);
            $em->persist($product);
          //Send the querries.
            $em->flush();
          //Then redirect to the product.
            return $this->redirectToRoute('product_show', array('id' => $product->getId()));
        }

        return $this->render('product/show.html.twig', array(
            'error' => '',
            'product' => $product,
            'rates' => $rates,
            'delete_form' => $deleteForm->createView(),
            'bids' => $bids,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing product entity.
     *
     */
    public function editAction(Request $request, Product $product)
    {
        $deleteForm = $this->createDeleteForm($product);
        $editForm = $this->createForm('CA\CommerceBundle\Form\EditProductType', $product);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_show', array('id' => $product->getId()));
        }

        return $this->render('product/edit.html.twig', array(
            'product' => $product,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a product entity.
     *
     */
    public function deleteAction(Request $request, Product $product)
    {
        $form = $this->createDeleteForm($product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($product);
            $em->flush();
        }

        return $this->redirectToRoute('product_index');
    }

    /**
     * Creates a form to delete a product entity.
     *
     * @param Product $product The product entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Product $product)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('product_delete', array('id' => $product->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
