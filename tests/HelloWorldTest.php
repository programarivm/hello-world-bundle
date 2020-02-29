<?php

namespace Programarivm\HelloWorldBundle\Tests;

use Programarivm\HelloWorldBundle\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * @test
     */
    public function signal()
    {
        $helloWorld = new HelloWorld();

        $this->assertStringStartsWith('Hello world!', $helloWorld->signal());
    }
}
