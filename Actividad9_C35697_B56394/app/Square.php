<?php

namespace App;

class Square implements ShapeInterface
{
    public function __construct(
        public float $width,
        public float $height
    ) {}

    public function area(): float
    {
        return $this->width * $this->height;
    }
}