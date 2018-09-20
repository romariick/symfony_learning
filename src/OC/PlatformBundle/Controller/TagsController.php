<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TagsController extends Controller
{
    public function tagsAction()
    {
        /*
         * Pour utilise tag :
         *  1 - Ajouter un tags pour le service qu'il faut identifier
         *  2 - Récuperer les serives qu'il faut tagé avec findDefinition dans container
         *  3 - Fait un boucle pour le les listes des services tagé
         *  4 - Et met la réferce du tags dans le service (addMethodCall for exemple)
         */
        dump($this->get('somme'));
        die;
    }
}
