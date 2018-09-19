<?php

namespace ValidationBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class CustumValidator extends ConstraintValidator
{
    
     public $message = 'The string "{{ string }}" contains an illegal character: it can only contain letters or numbers.';
     
    public function validate($value, Constraint $constraint) {
        
         if (!preg_match('/^[0-9]+$/', $value, $matches)) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ string }}', $value)
                ->addViolation();
        }
    }

}
