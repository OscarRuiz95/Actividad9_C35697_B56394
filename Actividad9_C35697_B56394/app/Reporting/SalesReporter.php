<?php

namespace App\Reporting;

use App\Repositories\SalesRepository;

class SalesReporter
{
    public function __construct(
        protected SalesRepository $repo
    ) {}

    public function between($startDate, $endDate, SalesOutputInterface $formatter): string
    {
        $sales = $this->repo->between($startDate, $endDate);

        return $formatter->output($sales);
    }
} 

