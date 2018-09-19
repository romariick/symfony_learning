<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TwigController extends Controller{

    public function twigAction(){     
        $afficher = 'Utiliser {{}}';
        return $this->render('OCPlatformBundle:Twig:index.html.twig',
                     ['afficher'=> $afficher]);
    }
}
