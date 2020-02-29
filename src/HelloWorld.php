<?php

namespace Programarivm\HelloWorldBundle;

class HelloWorld
{
    private $unicornsAreReal;

    private $minSunshine;

    public function __construct(bool $unicornsAreReal = true, $minSunshine = 3)
    {
        $this->unicornsAreReal = $unicornsAreReal;
        $this->minSunshine = $minSunshine;
    }

    public function speak(): string
    {
        return 'Hello world!';
    }
}
