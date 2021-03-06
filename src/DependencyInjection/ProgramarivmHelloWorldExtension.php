<?php

namespace Programarivm\HelloWorldBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class ProgramarivmHelloWorldExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('programarivm.hello_world');
        $definition->setArgument(1, $config['name']);
        $definition->setArgument(2, $config['is_exoplanet']);
        $definition->setArgument(3, $config['satellites']);
    }

    public function getAlias()
    {
        return 'programarivm_hello_world';
    }
}
