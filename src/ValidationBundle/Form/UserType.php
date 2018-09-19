<?php

namespace ValidationBundle\Form; 

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;
class UserType extends AbstractType {
 
   public function buildForm(FormBuilderInterface $builder, array $options) 
   {
        $builder->add('firstName', TextType::class)
                ->setMethod('GET')
                ->add('bic', \Symfony\Component\Form\Extension\Core\Type\NumberType::class, [
                    'required' => false                    
                ])                
                ->add('submit', \Symfony\Component\Form\Extension\Core\Type\SubmitType::class);             
    }
    
    public function buildView(FormView $view, FormInterface $form, array $options) {
        
       
    }
    
    public function finishView(FormView $view, FormInterface $form, array $options) {
        
       
    }
    
    public function getBlockPrefix() {
        
        
    }
    
    public function configureOptions(\Symfony\Component\OptionsResolver\OptionsResolver $resolver) {
        
    }
        
    
}
