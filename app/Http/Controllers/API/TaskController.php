<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\ApiController;
use App\Http\Requests\TaskStoreRequest;
use App\Http\Resources\Task\TaskResource;
use App\Models\Task;

class TaskController extends ApiController
{
    public function index()
    {
        return TaskResource::collection(Task::paginate(10))->hide(["file"]);
    }

    public function store(TaskStoreRequest $request)
    {
        $data = $request->validated();
        $data["file"] = $this->singleUpload($request->file("file"), "tasks");
        $task = Task::create($data);

        return TaskResource::make($task)->hide(["file"]);
    }

    public function show(Task $task)
    {
        return TaskResource::make($task);
    }
}
