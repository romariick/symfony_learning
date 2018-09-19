<?php

namespace OC\PlatformBundle\Listener;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Console\Event\ConsoleCommandEvent;
use Symfony\Component\Console\Event\ConsoleExceptionEvent;
use Symfony\Component\Console\Event\ConsoleTerminateEvent;
use Symfony\Component\Console\ConsoleEvents;

class ConsoleListener implements EventSubscriberInterface{
    
    public function command(ConsoleCommandEvent $consoleCommandEvent)
    {
        $input = $consoleCommandEvent->getInput(); // Objet input
        $output = $consoleCommandEvent->getOutput(); // Objet Output
        
        $commande = $consoleCommandEvent->getCommand();
       // $output->writeln(sprintf('Le commande "%s"va être executé', $commande->getName()));
    }
    
    public function exception(ConsoleExceptionEvent $consoleExceptionEvent)
    {
        $exception = $consoleExceptionEvent->getException();
        //$consoleExceptionEvent->getOutput()->writeln(sprint('Une exception a été lancé : "%s"', $exception->getMessage()));
    }
    
    public function terminate(ConsoleTerminateEvent $consoleTerminateEvent)
    {
        $consoleTerminateEvent->getOutput()->writeln('Commande terminé');
    }
            
    public static function getSubscribedEvents() 
    {
        return [
            ConsoleEvents::COMMAND => 'command',
            ConsoleEvents::EXCEPTION => 'exception',
            ConsoleEvents::TERMINATE => 'terminate'
        ];
    }
            
}
