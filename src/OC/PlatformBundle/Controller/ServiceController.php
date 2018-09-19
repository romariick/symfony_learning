<?php


namespace OC\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
class ServiceController extends Controller {
 
    public function serviceAction(){
        return new Response('Hello word');
    }
}
