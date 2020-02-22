<?php

namespace Programarivm\EasyAclBundle;

use Programarivm\EasyAclBundle\DependencyInjection\Compiler\WordProviderCompilerPass;
use Programarivm\EasyAclBundle\DependencyInjection\ProgramarivmEasyAclExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class EasyAclBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new WordProviderCompilerPass());
    }
    
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new ProgramarivmEasyAclExtension();
        }

        return $this->extension;
    }
}
