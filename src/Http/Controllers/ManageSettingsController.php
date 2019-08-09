<?php

namespace MBLSolutions\Report\Http\Controllers;

use Illuminate\Support\Collection;
use MBLSolutions\Report\Models\ReportConnection;
use MBLSolutions\Report\Models\ReportMiddleware;
use MBLSolutions\Report\Models\ReportSelectField;
use MBLSolutions\Report\Models\ReportDataType;

class ManageSettingsController
{

    /**
     * Get Manage Settings
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return collect([
            'connections' => (new ReportConnection)->all(),
            'middleware' => (new ReportMiddleware)->all(),
            'models' => (new ReportSelectField)->all(),
            'data_types' => (new ReportDataType)->all()
        ]);
    }

}