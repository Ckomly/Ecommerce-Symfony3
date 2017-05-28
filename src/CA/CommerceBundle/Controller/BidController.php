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
     public function showAction($id)
     {
         $em = $this->getDoctrine()->getManager();
         $product = $em->getRepository('CACommerceBundle:Product')->find($id);

         if ($product === null) {
           throw new NotFoundHttpException("This product doesn't exist.");
         }

         $listBids = $em->getRepository('CACommerceBundle:Bid')->findBy(array('product' => $product));

         return $this->render('bid/show.html.twig', array(
             'product' => $product,
             'listBids' =>$listBids
         ));
     }
}
