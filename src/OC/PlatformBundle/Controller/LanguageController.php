<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class LanguageController extends Controller {
    
    public function languageAction(Request $request)
    {
        $language = $request->getLanguages();
        $preferedLanguage = $request->getPreferredLanguage();
        
        // Methode 1
        $slug1 = $request->get('slug');
        // Methode 2
        $slug2 = $request->attributes->get('slug');
       // Methode 3       
        $slug3 = $request->attributes->get('-route_params')['slug'];
        
        return new Response($preferedLanguage .'slug 1 :'.$slug1." Slug 2 : ".$slug2."Slug 3: ".$slug3);
    }
}
