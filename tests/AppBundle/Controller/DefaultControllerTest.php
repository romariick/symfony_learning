<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
       $client = static::createClient();
       $crawler = $client->request('GET', 'https://github.com/login');
        dump($client); die;
       $form = $crawler->selectButton('Sign in')->form();
       
      
    }
    
    public function testToto(){
        $client = static::createClient();    
        $profiler = new \Symfony\Component\HttpKernel\Profiler\Profile($token);
        $response = new \Symfony\Component\HttpFoundation\Request();
        $response->server->get('');
        new \Symfony\Component\HttpFoundation\Session\Session();
        new \Symfony\Component\HttpFoundation\Cookie($name);
    }
    
    public function testTutu()
    {
        $client = static::createClient(
    [], 
        [ 
            'HTTP_HOST'=> 'www.toto.com', 
            'HTTP_USER_AGENT' => ''
        ]
        );
        
      $crawler =  $client->request('GET', '/toto/23');
      
      $a = $client->getResponse();
      
      
       
    }
  
}
