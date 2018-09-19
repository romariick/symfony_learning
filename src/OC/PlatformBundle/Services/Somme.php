<?php

namespace OC\PlatformBundle\Services;

use OC\PlatformBundle\Services\SommeRules;

class Somme {

    private $sommRules;

    public function __construct() {
        
    }
    public function addMultiplication(SommeRules $sommeRules) {  
       
        return $this->sommRules[] = $sommeRules->addMultiplication();
    }
    
    public function getValue(){
        return $this->sommRules;
    }
}
