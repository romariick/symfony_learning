<?php

namespace ValidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use ValidationBundle\Validator\Person;

class SerializerController extends Controller
{
    public function indexAction()
    {
        $encoders = [new JsonEncoder(), new XmlEncoder(), new CsvEncoder()];
        $normalizers = [new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        $person = new Person();

        $person->setName('Romaric');
        $person->setAge('20');
        $person->setSportsman(false);
        $format = $serializer->serialize($person, 'csv');

        $data = <<<EOF
<person>
    <name>foo</name>
    <age>99</age>
    <sportsman>false</sportsman>
</person>
EOF;

        $desiarlize = $serializer->deserialize($data, Person::class, 'xml', array('object_to_populate' => $person));

        dump($desiarlize);
        die;
    }
}
