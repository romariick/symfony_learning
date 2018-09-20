<?php

namespace OC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;

class ImageType extends AbstractType
{
    public function buildFomr(\Symfony\Component\Form\FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('url', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('alt', \Symfony\Component\Form\Extension\Core\Type\TextType::class);
    }

    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'OC\PlatformBundle\Entity\Image'));
    }
}
