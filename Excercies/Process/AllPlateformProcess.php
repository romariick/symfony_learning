<?php
require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Process\ProcessBuilder;
use Symfony\Component\Process\Exception\ProcessFailedException;

$process = new ProcessBuilder(['ls', '-lsa']);
$process->getProcess()->run();

