<?php
namespace ValidationBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\ArrayInput;
class AnotherCommand extends Command{
    
    protected function configure(){
        
        $this->setName('another:commad');
        
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        
        $command = $this->getApplication()->find('test:test');  
        $argument = [
            'command' => 'test:test',
            'lastname' => 'romaric'
        ];
        
        $arrayInput = new ArrayInput($argument);
      
        $returnCode = $command->run($arrayInput, new \Symfony\Component\Console\Output\NullOutput());
        
        dump($returnCode); die;
                
        
    }
}
