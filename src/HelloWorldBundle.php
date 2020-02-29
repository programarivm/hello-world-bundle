<?php

namespace Programarivm\HelloWorldBundle;

use Programarivm\HelloWorldBundle\DependencyInjection\ProgramarivmHelloWorldExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HelloWorldBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new ProgramarivmHelloWorldExtension();
        }

        return $this->extension;
    }
}
