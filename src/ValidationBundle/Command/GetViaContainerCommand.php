<?php
namespace ValidationBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

class GetViaContainerCommand extends ContainerAwareCommand
{
 
    protected function configure() {
        
        $this->setName('bil');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $this->getContainer()->get('');
    }
}
