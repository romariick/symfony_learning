<?php

namespace ValidationBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ValidationBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        //  $container->addCompilerPass(new \ValidationBunlde\DependencyInjection\CustumDi());
    }
}
