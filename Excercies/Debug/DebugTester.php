<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Debug\Debug;
use Symfony\Component\Debug\ExceptionHandler;
use Symfony\Component\Debug\DebugClassLoader;
use Symfony\Component\Debug\ErrorHandler;

/*Register an error and exception handler*/
Debug::enable();
DebugClassLoader::enable();
/*Catch uncaugth PHP error and Exception and convert into nice response*/
ExceptionHandler::register();
ErrorHandler::register();




