<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\User\StoreUser;
use App\Http\Requests\User\UpdateUser;

class UserController extends Controller
{
    public function index()
	{
		$users = User::paginate(10);
		return view('users.index', compact('users'));
	}

	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}

	public function create()
	{
		return view('users.create');
	}

	public function store(StoreUser $request)
	{
		$input = $request->all();
		User::create($input);
		return redirect()->route('users.index');
	}

	public function edit(User $user)
	{
		return view('users.edit', compact('user'));
	}

	public function update(UpdateUser $request, User $user)
	{
		$input = $request->all();
		$user->update($input);
		return redirect()->route('users.index');
	}

	public function destroy(User $user)
	{
		$user->delete();
		return redirect()->route('users.index');
	}
}
