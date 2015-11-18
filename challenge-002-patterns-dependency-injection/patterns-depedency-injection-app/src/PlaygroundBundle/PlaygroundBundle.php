<?php


namespace PlaygroundBundle;

use PlaygroundBundle\DependencyInjection\Complier\RenderersPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PlaygroundBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RenderersPass());
    }
}
