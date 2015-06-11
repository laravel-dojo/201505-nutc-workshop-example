<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Controllers\Controller;

class ContactsController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('contacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ContactStoreRequest $request)
	{
		$contact = \App\Contact::create($request->all());

		return redirect()->route('contacts.create')->with('success', '謝謝您的留言');
	}

}
