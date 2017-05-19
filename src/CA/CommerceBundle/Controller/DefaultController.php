<?php

namespace CA\CommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CACommerceBundle:Default:index.html.twig');
    }
}
