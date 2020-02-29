<?php

namespace Programarivm\HelloWorldBundle\Tests;

use Programarivm\HelloWorldBundle\LoremIpsum;
use PHPUnit\Framework\TestCase;

class LoremIpsumTest extends TestCase
{
    public function testSpeak()
    {
        $loremIpsum = new LoremIpsum();

        $this->assertEquals('lorem ipsum', $loremIpsum->speak());
    }
}
