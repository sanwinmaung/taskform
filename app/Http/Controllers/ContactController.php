<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\Contact\StoreContact;
use App\Http\Requests\Contact\UpdateContact;

class ContactController extends Controller
{
	public function index()
	{
		$contacts = Contact::paginate(10);
		return view('contact.index', compact('contacts'));
	}

	public function show(Contact $contact)
	{
		return view('contact.show', compact('contact'));
	}

	public function create()
	{
		return view('contact.create');
	}

	public function store(StoreContact $request)
	{
		$input = $request->all();
		Contact::create($input);
		return redirect()->route('contact.index');
	}

	public function edit(Contact $contact)
	{
		return view('contact.edit', compact('contact'));
	}

	public function update(UpdateContact $request, Contact $contact)
	{
		$input = $request->all();
		$contact->update($input);
		return redirect()->route('contact.index');
	}

	public function destroy(Contact $contact)
	{
		$contact->delete();
		return redirect()->route('contact.index');
	}
}
