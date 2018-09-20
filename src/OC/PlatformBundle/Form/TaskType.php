<?php

namespace OC\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('task', TextType::class)
            ->add('dueDate', DateType::class)
            ->add('published', \Symfony\Component\Form\Extension\Core\Type\CheckboxType::class,
                    array('required' => true))
            ->add('image', ImageType::class)
            ->add('file', \Symfony\Component\Form\Extension\Core\Type\FileType::class)
            ->add('save', SubmitType::class, array('label' => 'Create Task'));

        /*
         * - FormEvents::PRE_SUBMIT => array
         * - FormEvents::POST_SET_DATA => Objet
         * - FormEvents::POST_SUBMIT => Objet
         * - FormEvents::SUBMIT => Objet
         */
        $builder->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
            dump($event->getData());
            die('ic');
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'OC\PlatformBundle\Entity\Task'));
    }
}
