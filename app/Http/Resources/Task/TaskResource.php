<?php

namespace App\Http\Resources\Task;

use App\Traits\Resource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class TaskResource extends JsonResource
{
    use Resource;

    public static function collection($resource)
    {
        return tap(new TaskResourceCollection($resource), function ($collection) {
            $collection->collects = __CLASS__;
        });
    }

    public function toArray($request)
    {
        return $this->filterFields([
            "id" => $this->id,
            "name" => $this->name,
            "description" => $this->description,
            "file" => Storage::disk('local')->temporaryUrl($this->file, now()->addMinute(10)),
            "type" => $this->type,
        ]);
    }

}
