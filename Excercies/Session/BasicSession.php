<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Session\Session;

$session = new Session();
$session->start();
$session->set('toto', 'totovalue');

echo $session->get('toto').PHP_EOL;

// set message flash
$session->getFlashBag()->add('warning', 'Toto 1234');

// get message flash
$flashBags = $session->getFlashBag()->get('warning');

echo 'Session name : '.$session->getName().PHP_EOL;

var_dump($session->all());

$session->clear();

foreach ($flashBags as $flashBag) {
    var_dump($flashBag);
    die;
}
