<?php

namespace OC\PlatformBundle;

use Symfony\Component\DependencyInjection\Compiler\PassConfig;

class OCPlatformBundle extends \Symfony\Component\HttpKernel\Bundle\Bundle
{

    public function build(ContainerBuilder $container) {
        PassConfig::TYPE_BEFORE_OPTIMIZATION;
        PassConfig::TYPE_OPTIMIZE;
        PassConfig::TYPE_BEFORE_REMOVING;
        PassConfig::           
       
    }
 
}
