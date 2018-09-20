<?php

namespace ValidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ValidationBundle\Validator\User;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $user = new User();
        $user->setFirstName('');
        $user->setLastName('Titi');
        $user->setAddress('1222');
        $constraint = $this->get('validator')->validate($user);
        $a = $this->get('validator')->validate($user);
        $form = $this->createForm(\ValidationBundle\Form\UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            die('is valid');
        }

        return $this->render('ValidationBundle:Default:index.html.twig',
               [
                   'form' => $form->createView(),
               ]
               );
    }
}
