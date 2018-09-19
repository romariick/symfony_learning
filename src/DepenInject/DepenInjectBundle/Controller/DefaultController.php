<?php

namespace DepenInject\DepenInjectBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DepenInjectDepenInjectBundle:Default:index.html.twig');
    }
}
