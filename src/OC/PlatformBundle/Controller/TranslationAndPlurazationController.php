<?php

namespace OC\PlatformBundle\Controller;;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class TranslationAndPlurazationController extends Controller{
    
    public function transAction(Request $request){
        dump($this->get('service_container'));die;
       // $request->getSession()->set('_locale', 'fr');
        
        dump($this->generateUrl('translation', ['page' => 1])); die; 
        
        $ret = $this->get('translator')->trans('My name is : '.$nom);
        
        dump($ret); die;
        
        
    }
}
