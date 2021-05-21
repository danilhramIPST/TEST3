<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(TaskRequest $request)
    {
        Task::create($request->validated());
        return view('testpost',['post'=>$request->all()]);
    }

}
