<?php

namespace ValidationBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ContainsAlphanumeric extends Constraint
{
    public $message = 'The string "{{ string }}" contains an illegal character: it can only contain letters or numbers.';

    public function validatedBy()
    {
        return 'ValidationBundle\Validator\CustumValidator';
    }
}
