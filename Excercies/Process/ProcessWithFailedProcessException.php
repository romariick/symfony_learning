<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Process\Process;

$process = new Process(`ls -lsa`);

try {
    $process->mustRun();
} catch (\Symfony\Component\Process\Exception\ProcessFailedException $ex) {
    print_r($ex);
}
$process->getOutput();
