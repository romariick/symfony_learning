<?php

namespace TestPreparationBundle\Command;

use Symfony\Component\Console\Command\Command;

class TestCommand  extends Command {
    
    
    protected function configure() {
    
        $this->setName('toto')
                ->addOption('datNais', \Symfony\Component\Console\Input\InputOption::VALUE_REQUIRED)                
                
                ->addArgument('jours', \Symfony\Component\Console\Input\InputOption::VALUE_NONE)
                ->addArgument('nometprenom',  \Symfony\Component\Console\Input\InputOption::VALUE_IS_ARRAY);
    }
    
    
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output) {
        
        dump($input->getArgument('nometprenom')); die;
    }
}
