<?php

namespace TestPreparationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
    }

    public function routeAction(Request $request)
    {
        $this->getDoctrine();
        $this->render($view);
        $this->renderView($view);
        $this->getUser();
        $this->getParameter($name);
        $this->addFlash($type, $message);
        $this->get('session')->getFlashBag()->add();
        $this->isCsrfTokenValid($id, $token);
        $this->createForm($type);
        $this->generateUrl($route, $request);
        throw $this->createNotFoundException();
        $this->createFormBuilder();
    }
}
