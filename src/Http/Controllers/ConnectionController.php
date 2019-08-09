<?php

namespace MBLSolutions\Report\Http\Controllers;

use Illuminate\Support\Collection;
use MBLSolutions\Report\Models\ReportConnection;

class ConnectionController
{

    /**
     * Get a list of available connections
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return (new ReportConnection())->all();
    }

}