<?php

namespace App\Traits;

trait Resource
{
    protected array $withoutFields = [];

    public function hide(array $fields)
    {
        $this->withoutFields = $fields;

        return $this;
    }

    protected function filterFields($array)
    {
        return collect($array)->forget($this->withoutFields)->toArray();
    }
}
