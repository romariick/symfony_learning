<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SecurityController extends Controller
{
    /**
     * Pour sécurisé la page du login il faut suivre les étapes suivant :.
     *
     * 1 - dans le fichier de config security.yml :
     *   - ajouter le login_form: ~ pour dire de que l'authtentification est
     *   via un formulaire
     *  - logout : path /logout pour se deconnecter
     * 2- Ajouter les routes /login_check pour faire la vérification du login
     * 4 - Créer la class qui implement UserInterface et UserProvider
     * 5 - Configurer en tant que main du provider la class qui implement UserProvider
     * 6 - Faut pas oblier de l'econder la class qui implement l'UserInterface et de l'entity
     *
     * Note : pour le logout dans sécurity on peut le mettre target_path : /urlderedirectio
     */
    public function securityAction()
    {
        $factory = $this->get('security.encoder_factory');
        $user = new \OC\PlatformBundle\Entity\User();
        // Use to check encoders provider
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        // $ret = $em->getRepository('OCPlatformBundle:User')->loadUserByUsername('Roma11ric');

        $re = $this->container->get('security.token_storage');
        // dump($re); die;
        $encoder = $factory->getEncoder($user);
        // dump($ret); die;
        //dump($factory); die;

        return new Response('Connexion réussie');
    }

    public function logoutAction()
    {
    }

    public function loginAction()
    {
        return $this->render('OCPlatformBundle:Advert:login.html.twig');
    }

    public function loginCheckAction()
    {
    }
}
