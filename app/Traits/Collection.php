<?php

namespace App\Traits;

trait Collection{

    protected array $withoutFields = [];

    public function toArray($request)
    {
        return $this->processCollection($request);
    }

    public function hide(array $fields)
    {
        $this->withoutFields = $fields;

        return $this;
    }
}
