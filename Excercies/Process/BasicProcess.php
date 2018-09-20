<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

$process = new Process(`ls -lsa`);

$process->run();

if (!$process->isRunning()) {
    throw new ProcessFailedException();
}

$process->getOutput();
$process->getIncrementalOutput();
$process->getIncrementalErrorOutput();
