<?php

namespace OC\PlatformBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/');
        $this->assertContains('Hello World', $client->getResponse()->getContent());
   }
    
    public function testJsonResponses() 
    {      
       $client = static::createClient();
       $crawler = $client->request('GET', '/edit/1');      
    }
}
