<?php

namespace OC\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class AntifloodValidator extends ConstraintValidator 
{
    public function validate($value, Constraint $constraint) {
        
      if(strlen($value) < 3){
          dump($constraint->message);  die('ici validator personalisé');
          $this->context->addViolation($constraint->message);
      }   
    }
}
