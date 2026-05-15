<?php

namespace App;

class AreaCalculator
{
    public function calculate(array $shapes): float
    {
        $areas = [];

        foreach ($shapes as $shape) {
            $areas[] = $shape->area();
        }

        return array_sum($areas);
    }
}