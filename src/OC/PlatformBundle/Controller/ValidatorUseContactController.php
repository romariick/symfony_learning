<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\PlatformBundle\Entity\Contact;

class ValidatorUseContactController extends Controller
{
    public function indexAction(Request $request)
    {
        /**
         * Pour utiliser validator personalisé il faut suivre les étapes suivants:
         * 1 - Créer un service avec le tag  - {name: validator.constraint_validator, alias: oc_platform_antiflood} qui etends ConstraintValidator
         * 2 - Après la création du service qui est tagé ; donc le service est pris en compte en tant que validator
         * 3 - En utilisat l'alias dans le tag, il faut créer une class qui extends Constraint pour lui assigné en tant
         * que validator avec le message
         * 4 - Faut pas oblier l'annotation Annotation sur le validator qui extends Constraint
         * 5 - Met le sur l'entity.
         */
        $contact = new Contact();
        $contact->setPrenom('0000000');
        $contact->setNom('0');
        $error = $this->get('validator')->validate($contact);

        dump($error);
        die;

        return new Response('Hello contact');
    }
}
