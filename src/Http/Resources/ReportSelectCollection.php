<?php

namespace MBLSolutions\Report\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use MBLSolutions\Report\Models\ReportSelect;

class ReportSelectCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return $this->collection->transform(static function (ReportSelect $model) {
            return new ReportSelectResource($model);
        })->toArray();
    }
}
