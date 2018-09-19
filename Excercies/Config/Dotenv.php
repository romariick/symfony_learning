<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

$dotenv = new Dotenv();

$dotenv->load('dot.env');

$db = getenv('DB_USER');

echo $db;

print_r($_ENV);