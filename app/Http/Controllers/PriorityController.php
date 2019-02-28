<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Priority;
use App\Http\Requests\Priority\StorePriority;
use App\Http\Requests\Priority\UpdatePriority;

class PriorityController extends Controller
{
	public function index()
    {
    	$priorities = Priority::paginate(10);
    	return view('priority.index', compact('priorities'));
    }

    public function show(Priority $priority)
    {
    	return view('priority.show', compact('priority'));
    }

    public function create()
    {
        return view('priority.create');
    }

    public function store(StorePriority $request)
    {
        $input = $request->all();
        Priority::create($input);
        return redirect()->route('priority.index');
    }

    public function edit(Priority $priority)
    {
    	return view('priority.edit', compact('priority'));
    }

    public function update(UpdatePriority $request, Priority $priority)
    {
        $input = $request->all();
        $priority->update($input);
        return redirect()->route('priority.index');
    }

    public function destroy(Priority $priority)
    {
        $priority->delete();
        return redirect()->route('priority.index');
    }
}
