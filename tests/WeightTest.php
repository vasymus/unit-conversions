<?php

namespace Vasymus\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use Vasymus\UnitConversions\Weight;

class WeightTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_converts_kilograms_to_lgs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
