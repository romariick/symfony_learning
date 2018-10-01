<?php

namespace OC\PlatformBundle\Services;

use OC\PlatformBundle\Repository\UserLocal;

class ReadUsers {
    
    private $userLocal;
    
    public function __construct(UserLocal $userLocal) {
        $this->userLocal = $userLocal;
    }
    
    public function readUser($id){
        
      return  $this->userLocal->find($id);
        
        
    }
}
