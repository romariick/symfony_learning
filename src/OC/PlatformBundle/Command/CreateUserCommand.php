<?php

namespace OC\PlatformBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

class CreateUserCommand extends ContainerAwareCommand{

    protected function initialize(InputInterface $input, OutputInterface $output) {
        
        echo 'initialize';
    }

    protected function interact(InputInterface $input, OutputInterface $output) {
        echo 'interact';
    }

    protected function configure() {
        $this->setName('create:user')
             ->setDescription("Create user commnd")
             ->addArgument('name', \Symfony\Component\Console\Input\InputArgument::REQUIRED)
             ->addOption('admin', \Symfony\Component\Console\Input\InputOption::VALUE_OPTIONAL);
             
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        
        echo 'execute';
//        $translator = new Translator('fr_FR');
//        $translator->addLoader('array', new ArrayLoader());
//        $translator->addResource('array', array(
//          'Symfony is great!' => 'J\'aime Symfony!',
//        ), 'fr_FR');
//        $output->writeln('This is a commande test \n');
//        $output->writeln('My arguments : '. $input->getArgument('arg'));
//        
//        if($output->getVerbosity() == OutputInterface::VERBOSITY_NORMAL){
//            $output->writeln('Verbosity normal == 32');
//        }
//        
//        var_dump($translator->trans('Symfony is0000000000000 great!'));
        /**
         const VERBOSITY_QUIET = 16;
         const VERBOSITY_NORMAL = 32;
         const VERBOSITY_VERBOSE = 64;
         const VERBOSITY_VERY_VERBOSE = 128;
         const VERBOSITY_DEBUG = 256;
         */
       
    }
}
