<?php

namespace OC\PlatformBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use OC\PlatformBundle\DependencyInjection\Compiler\CompilerPassSomme;
class OCPlatformBundle extends Bundle
{
    public function build(ContainerBuilder $container) 
    { 
        parent::build($container);
        $container->addCompilerPass(new CompilerPassSomme());
    }
    
}
