<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\CoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * @author Hugo Briand <briand@ekino.com>
 */
class StatusRendererCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('sonata.core.twig.status_runtime')) {
            return;
        }

        $definition = $container->getDefinition('sonata.core.twig.status_runtime');

        foreach ($container->findTaggedServiceIds('sonata.status.renderer') as $id => $attributes) {
            $definition->addMethodCall('addStatusService', [new Reference($id)]);
        }
    }
}
