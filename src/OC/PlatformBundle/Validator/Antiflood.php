<?php

namespace OC\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Antiflood  extends Constraint
{

    public $message = "Vous avez posté un message !";
    
    public function validatedBy() {

        return 'oc_platform_antiflood';
    }
    
}
