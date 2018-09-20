<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

$normalizer = [new ObjectNormalizer()];
$encoder = [new XmlEncoder(), new JsonEncoder()];

$serializer = new Serializer($normalizer, $encoder);

$serializer->serialize($data, $format);
$serializer->deserialize($data, $type, $format);
