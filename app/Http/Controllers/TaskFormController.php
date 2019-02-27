<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\TaskForm;
use App\TaskType;
use App\Contact;
use App\Priority;

use App\Http\Requests\StoreTask;
use App\Http\Requests\UpdateTask;

class TaskFormController extends Controller
{
    public function index()
    {
        $tasks = TaskForm::latest()->paginate(10);
        return view('task-forms.index', compact('tasks'));
    }

    public function show(TaskForm $taskForm)
    {
        $task = $taskForm;
        return view('task-forms.show', compact('task'));
    }

    public function create()
    {
    	$users = User::all();
    	$task_types = TaskType::all();
        $contacts = Contact::all();
    	$priorities = Priority::all();
    	return view('task-forms.create', compact('users', 'task_types', 'contacts', 'priorities')); 
    }

    public function store(StoreTask $request)
    {
        $input = $request->all();
        $task = TaskForm::create($input);
        return redirect()->route('task-forms.index');
    }

    public function edit(TaskForm $taskForm)
    {
        $task = $taskForm;
        $users = User::all();
        $task_types = TaskType::all();
        $contacts = Contact::all();
        $priorities = Priority::all();
        return view('task-forms.edit', compact('task', 'users', 'task_types', 'contacts', 'priorities'));
    }

    public function update(UpdateTask $request, TaskForm $taskForm)
    {
        $input = $request->all();
        $taskForm->update($input);
        return redirect()->route('task-forms.index');
    }

    public function destroy(TaskForm $taskForm)
    {
        return $taskForm;
        $taskForm->delete();
        return redirect()->route('task-forms.index');
    }

}
