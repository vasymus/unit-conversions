<?php

namespace Vasymus\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Vasymus\UnitConversions\Temperature;

class TemperatureTest extends TestCase
{
    /** @test */
    public function it_can_converts_celsius_to_fahrenheit()
    {
        $fahrenheit = Temperature::fromCelsius(100)->toFahrenheit();

        $this->assertEquals(212, $fahrenheit);
    }
}
