<?php

namespace App;

class Circle implements ShapeInterface
{
    public function __construct(public float $radius) {}

    public function area(): float
    {
        return $this->radius * $this->radius * pi();
    }
}