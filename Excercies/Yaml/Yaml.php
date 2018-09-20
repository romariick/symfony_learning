<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$dateHandler = Yaml::parse('2017-06-06');

var_dump($dateHandler); // 2121212

$dateHandler = Yaml::parse('2017-06-06', Yaml::PARSE_DATETIME); // DateTime

var_dump($dateHandler);

$dump = Yaml::dump(['string' => 'mulit\nline\nstring'], 2, 4, Yaml::DUMP_MULTI_LINE_LITERAL_BLOCK);

echo $dump; die;
