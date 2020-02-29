<?php

namespace Programarivm\EasyAclBundle\Tests;

use Programarivm\EasyAclBundle\LoremIpsum;
use PHPUnit\Framework\TestCase;

class LoremIpsumTest extends TestCase
{
    public function testSpeak()
    {
        $loremIpsum = new LoremIpsum();

        $this->assertEquals('lorem ipsum', $loremIpsum->speak());
    }
}
