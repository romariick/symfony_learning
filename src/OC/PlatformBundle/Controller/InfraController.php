<?php

namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class InfraController extends Controller{
    
    public function infraAction(Request $request){
        
        $user = $this->get('read_users')->readUser($request->get('name'));
        dump($user); die;
    }
}
