<?php

require_once __DIR__.'/../../vendor/autoload.php';

use Symfony\Component\Form\Forms;

class FromExemple extends Symfony\Component\Form\AbstractType
{
    public function buildForm(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        die('i');
        $builder->add('due', Symfony\Component\Form\Extension\Core\Type\TextType::class);
    }
}

$formExemple = new FromExemple();
print_r($formExemple); die;
$form = Forms::createFormFactory()->create($formExemple);

print_r($form); die;
