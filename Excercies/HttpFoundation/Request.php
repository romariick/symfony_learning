<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$request = Request::createFromGlobals();

$headerValue = $request->headers->get('Accept');
var_dump($headerValue); die;
$headerAccept = \Symfony\Component\HttpFoundation\AcceptHeader::fromString($headerValue);
if ($headerAccept->has('text/html')) {
    die('ii');
}
$item = $headerAccept->get('text/html');
print_r($item);
