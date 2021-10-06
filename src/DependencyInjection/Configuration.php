<?php

namespace App\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('app');

        $treeBuilder
            ->getRootNode()
                ->children()
                    ->scalarNode('name')->info('The app name')->end()
            ->integerNode('count')->end()
                    ->scalarNode('url')
            ->isRequired()
            ->validate()
            ->ifTrue(fn ($value) => FALSE === filter_var($value, FILTER_VALIDATE_URL))
            ->thenInvalid('%s is not a valid url')
            ->end()
                ->end()
        ;

        return $treeBuilder;
    }
}
