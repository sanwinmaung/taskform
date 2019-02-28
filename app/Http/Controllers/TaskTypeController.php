<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TaskType;
use App\Http\Requests\TaskType\StoreType;
use App\Http\Requests\TaskType\UpdateType;

class TaskTypeController extends Controller
{
    public function index()
    {
    	$taskTypes = TaskType::paginate(10);
    	return view('task-types.index', compact('taskTypes'));
    }

    public function show(TaskType $taskType)
    {
    	return view('task-types.show', compact('taskType'));
    }

    public function create()
    {
        return view('task-types.create');
    }

    public function store(StoreType $request)
    {
        $input = $request->all();
        $taskType = TaskType::create($input);
        return redirect()->route('task-types.index');
    }

    public function edit(TaskType $taskType)
    {
    	return view('task-types.edit', compact('taskType'));
    }

    public function update(UpdateType $request, TaskType $taskType)
    {
        $input = $request->all();
        $taskType->update($input);
        return redirect()->route('task-types.index');
    }

    public function destroy(TaskType $taskType)
    {
        $taskType->delete();
        return redirect()->route('task-types.index');
    }
}
