<?php

namespace CA\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $products = $em->getRepository('CACommerceBundle:Product');
        $products = $products->findBy(array(), array('date' => 'DESC'),4);

        $bids = $em->getRepository('CACommerceBundle:Bid');
        $bids = $bids->findBy(array(), array('date' => 'DESC'),4);

        return $this->render('CACommerceBundle:Default:index.html.twig', array(
            'products' => $products,
            'bids' => $bids,
        ));
    }
}
