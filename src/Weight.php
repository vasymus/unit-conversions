<?php

namespace Vasymus\UnitConversions;

class Weight
{
    /**
     * @var float
     */
    private float $kilograms;

    /**
     * @param float $kilograms
     *
     * @return static
     */
    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    /**
     * @param float $kilograms
     */
    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    /**
     * @return float
     */
    public function toLbs(): float
    {
        return $this->kilograms * 2.204623;
    }
}
