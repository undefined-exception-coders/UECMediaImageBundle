<?php

namespace UEC\MediaImageBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

class UECMediaImageExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $loader = new Loader\XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load(sprintf('%s.xml', $container->getParameter('uec_media.db_driver')));

        $container->setParameter('uec_media_image.model.class', $config['model']);
        $container->setParameter('uec_media_image.form_name', $config['form_name']);

        $container->setAlias('uec_media_image.cdn', $config['cdn']);
        $container->setAlias('uec_media_image.file_system', $config['file_system']);
        $container->setAlias('uec_media_image.form_processor', $config['form_processor']);
        $container->setAlias('uec_media_image.model_manager', $config['model_manager']);

        $loader->load('cdn.xml');
        $loader->load('file_system.xml');
        $loader->load('form.xml');
        $loader->load('provider.xml');
    }
}
