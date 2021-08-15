<?php

namespace Vasymus\UnitConversions;

class Temperature
{
    /**
     * @var float
     */
    private float $celsius;

    /**
     * @param float $celsius
     *
     * @return static
     */
    public static function fromCelsius(float $celsius): self
    {
        return new static($celsius);
    }

    /**
     * @param float $celsius
     */
    public function __construct(float $celsius)
    {
        $this->celsius = $celsius;
    }

    /**
     * @return float
     */
    public function toFahrenheit(): float
    {
        return ($this->celsius * 1.8) + 32;
    }
}
