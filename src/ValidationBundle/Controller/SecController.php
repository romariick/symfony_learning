<?php

namespace ValidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\Debug\Debug;

class SecController extends Controller
{
    public function indexAction()
    {
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULL')) {
            $this->denyAccessUnlessGranted('Non');
        }

        $a = $this->get('security.password_encoder');

        dump($a);
        die;

        ErrorHandler::register();
        ExceptionHandler::register();
        Debug::enable();
    }
}
