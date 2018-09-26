<?php

namespace RoutingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RoutingBundle:Default:index.html.twig');
    }
}
