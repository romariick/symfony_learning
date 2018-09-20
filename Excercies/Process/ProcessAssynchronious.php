<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Process\Process;

$process = new Process(`ls -lsa`);

$process->start();

while ($process->isRunning()) {
    // waiting process to finish
}
$process->getOutput();
