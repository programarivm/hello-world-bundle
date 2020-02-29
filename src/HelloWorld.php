<?php

namespace Programarivm\HelloWorldBundle;

class HelloWorld
{
    private $name;

    private $isExoplanet;

    private $satellites;

    public function __construct(string $name = 'programarivm', bool $isExoplanet = true, int $satellites = 3)
    {
        $this->name = $name;
        $this->isExoplanet = $isExoplanet;
        $this->satellites = $satellites;
    }

    public function signal(): string
    {
        $isExoplanet = var_export($this->isExoplanet, true);

        return "Hello world! Name: {$this->name}. Exoplanet: {$isExoplanet}. Satellites: {$this->satellites}.";
    }
}
