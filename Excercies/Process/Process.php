<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Process\Process;

$process = new Process('/bin/ test.php');

 // Run an process

$process->start();
// getPid

$pid = $process->getPid();

echo $pid;
