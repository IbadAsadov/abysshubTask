<?php

namespace App\Http\Resources\Task;

use App\Traits\Collection;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TaskResourceCollection extends ResourceCollection
{
    use Collection;

    protected function processCollection($request)
    {
        return $this->collection->map(function (TaskResource $resource) use ($request) {
            return $resource->hide($this->withoutFields)->toArray($request);
        })->all();
    }
}
