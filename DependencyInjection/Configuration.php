<?php

namespace UEC\MediaImageBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('uec_media_image');

        $rootNode
            ->children()
                ->scalarNode('model')
                    ->isRequired()
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('cdn')
                    ->defaultvalue('uec_media_image.cdn.default')
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('file_system')
                    ->defaultvalue('uec_media_image.file_system.default')
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('form_name')
                    ->defaultvalue('uec_media_image_form')
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('form_processor')
                    ->defaultvalue('uec_media_image.form.processor.default')
                    ->cannotBeEmpty()
                ->end()
                ->scalarNode('model_manager')
                    ->defaultvalue('uec_media_image.manager.media_image.default')
                    ->cannotBeEmpty()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
