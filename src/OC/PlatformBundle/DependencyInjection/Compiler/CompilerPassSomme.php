<?php

namespace OC\PlatformBundle\DependencyInjection\Compiler; 

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class CompilerPassSomme implements CompilerPassInterface{
    
    public function process(ContainerBuilder $container) {
        $definition = $container->getDefinition('somme');
     //   var_dump($definition); die;
        $tagsId = $container->findTaggedServiceIds('somme.ex');
        // ??? $service
        foreach ($tagsId as $serviceNamOfTag => $service){
           $definition->addMethodCall('addMultiplication', array(new Reference($serviceNamOfTag)));
        }
        
    }
}
