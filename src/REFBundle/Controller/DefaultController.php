<?php

namespace REFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\AcceptHeader;
class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        
        
        
        $headerValue = $request->headers->get('Accept-Language');
        
//        $ascending = AcceptHeader::fromString($headerValue);
//        dump($ascending); die;
//        
//        $response = new \Symfony\Component\HttpFoundation\Response();
//        
//        $response->setCache(['max_age'=> 3600, 'etag'=> '1233', 'last_modified'=>new \DateTime(900000000000)]);
//        $response->setExpires(new \DateTime(900000000000));
//        $response->setContent('Ttot1070');
        
        
       // return $response;
        
//        $em = $this->getDoctrine()->getManager();
//        
//        $listeRefCcu = $em->getRepository('REFBundle:Ref')->findAll();
//        
        return $this->render('REFBundle:Default:test.html.twig'
                );
    }
}
