<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;

class SalesRepository
{
    public function between($startDate, $endDate): float
    {
        return (float) DB::table('sales')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->sum('amount');
    }
}