<?php

namespace ValidationBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;

class ValidationCommand extends Command
{
    protected function configure()
    {
        $this->setName('test:test')
                ->addArgument('lastname', InputArgument::OPTIONAL)
                ->addOption('nom', InputOption::VALUE_OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
