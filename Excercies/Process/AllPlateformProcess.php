<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Process\ProcessBuilder;

$process = new ProcessBuilder(['ls', '-lsa']);
$process->getProcess()->run();
