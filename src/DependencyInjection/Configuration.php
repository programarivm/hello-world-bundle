<?php

namespace Programarivm\HelloWorldBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('programarivm_hello_world');

        $treeBuilder
            ->getRootNode()
                ->children()
                    ->scalarNode('name')->defaultValue('programarivm')->info('Planet name')->end()
                    ->booleanNode('is_exoplanet')->defaultTrue()->info('Is this an exoplanet?')->end()
                    ->integerNode('satellites')->defaultValue(3)->info('Number of satellites')->end()
                ->end()
        ;

        return $treeBuilder;
    }
}
