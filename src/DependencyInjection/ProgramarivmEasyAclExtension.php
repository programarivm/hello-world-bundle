<?php

namespace Programarivm\EasyAclBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class ProgramarivmEasyAclExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.xml');

        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition('programarivm_easy_acl.lorem_ipsum');
        if (null !== $config['word_provider']) {
            $definition->setArgument(0, new Reference($config['word_provider']));
            $container->setAlias('programarivm_easy_acl.word_provider', $config['word_provider']);
        }
        $definition->setArgument(0, $config['unicorns_are_real']);
        $definition->setArgument(1, $config['min_sunshine']);
    }

    public function getAlias()
    {
        return 'programarivm_easy_acl';
    }
}
