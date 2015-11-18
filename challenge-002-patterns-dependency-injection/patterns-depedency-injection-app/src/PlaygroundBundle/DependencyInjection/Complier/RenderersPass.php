<?php


namespace PlaygroundBundle\DependencyInjection\Complier;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class RenderersPass
 *
 * @package PlaygroundBundle\DependencyInjection\Complier
 * @author  Cruceanu Daniela <daniela.cruceanu@cegeka.com>
 */
class RenderersPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $services = $container->findTaggedServiceIds('simple_storage');

        /**
         * @var Definition $serviceId
         * @var            $tags
         */
        foreach ($services as $serviceId => $tags) {
            foreach ($tags as $tagAttributes) {
                $service = $container->findDefinition($serviceId);
                $service->addMethodCall(
                    'setRenderer',
                    [new Reference('playground.service.stdout_renderer')]);
            }
        }
    }

}
