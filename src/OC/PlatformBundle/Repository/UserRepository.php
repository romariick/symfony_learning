<?php

namespace OC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManager;

class UserRepository implements UserLocal
{
    
    private $em;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;    
    }

    public function find($id) 
    {
        
       return  $this->em->find('OC\PlatformBundle\Entity\User', $id);
       
      
    }

}
