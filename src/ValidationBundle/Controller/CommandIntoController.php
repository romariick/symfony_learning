<?php

namespace ValidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class CommandIntoController extends Controller {

    
    public function indexAction(){
      $kernel = $this->get('kernel');
      
      $application = new Application($kernel);
      
      $argument = [
          'command' => 'test:test',
          'lastname' => 'romaric'
      ];
      
      $inputArray = new ArrayInput($argument);
      $application->run($inputArray, new NullOutput());
    }
}
