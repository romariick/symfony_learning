<?php

namespace ValidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ControllerServiceController extends Controller
{
    public function indexAction(Request $request)
    {
        $this->getUser();
        $this->get('security.token_storage')->getToken()->getUser();
        $this->container->get('security.token_storage')->getToken()->getUser();

        $this->getParameter($name);
        $this->container->getParameter($name);

        $this->addFlash($type, $message);
        $this->get('session')->getFlashBag()->add();
        $request->getSession()->getFlashBag()->add();

        $this->generateUrl('route_name');
        $this->redirectToRoute($route);
        $this->generateUrl($route, $request, $referenceType);
        $this->getDoctrine();
        throw $this->createNotFoundException($message, $previous);
        throw new NotFoundHttpException();
        $this->createForm($type);
        $this->get('form.factory')->create($type, $form);
        $this->createFormBuilder($request);

        $this->redirect($url, $status);
        $this->createForm($type, $request, $options);

        $this->isCsrfTokenValid($id, $token);
        $this->createAccessDeniedException($message, $previous);
        $this->forward($controller, $path);
    }
}
