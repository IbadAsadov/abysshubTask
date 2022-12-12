<?php

namespace  App\Traits;

trait File{
    public function singleUpload($file, $folder)
    {
        return str_replace("$folder/", "", $file->store($folder));
    }
}
