<?php

namespace OC\PlatformBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use OC\PlatformBundle\Entity\Task;
use OC\PlatformBundle\Entity\Utilisateur;
use OC\PlatformBundle\Services\Tags;
use Exception;
use OC\PlatformBundle\Utils\PlatFormEvents;
use OC\PlatformBundle\Listener\MessageEvent;
use OC\PlatformBundle\Form\TaskType;

class CustomizeListenerController extends controller {
   
    public function constumizeListenerAction() 
    {
        /**
         * 1- Recupération du service event_dispatcher
         * 2- Création du nouvel Object new MessageEvent qui ettend la class Event
         * 3 - Lancer le dispatch des évènement
         * 4 - Tags les services qu'il utilisent
         */
        $disptacher = $this->get('event_dispatcher');
        $messageEvent = new MessageEvent();
        $disptacher->dispatch(PlatFormEvents::POST_MESSAGE);
        
        return new Response('<html><body>Costumize</body></html>');
    }
}
