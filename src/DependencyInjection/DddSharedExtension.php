<?php

declare(strict_types=1);

namespace Tuzex\Bundle\Ddd\Shared\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Extension\PrependExtensionInterface;

final class DddSharedExtension extends Extension implements PrependExtensionInterface
{
    public function prepend(ContainerBuilder $container): void
    {
        $container->prependExtensionConfig('doctrine', [
            'orm' => [
                'mappings' => [
                    'Tuzex\Bundle\Ddd\Shared' => [
                        'type' => 'xml',
                        'prefix' => '',
                    ],
                ],
            ],
        ]);
    }

    public function load(array $configs, ContainerBuilder $container): void
    {
    }
}
