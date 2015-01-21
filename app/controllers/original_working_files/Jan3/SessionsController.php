<?php

class SessionsController extends BaseController {

	/*
	* Display a listing of the resource.
	* @return Response
	*/

	public function index()
	{
		return View::make('sessions.index');
	}

	/*
	* Show the form for creating a new resource
	*/

	public function create()
	{
		return View::make('sessions.create');
	}

	/*
	* Store a newly created resource in storage
	*/

	public function store()
	{
		// validate

		$input = Input::all();
		
		/* Old code for displaying input 
		
		dd($input);
		
		*/

		$attempt = Auth::attempt([
			'email' => $input['email'],
			'password' => $input['password']
			]);

		if ($attempt) return Redirect::intended('/')->with('flash_message', 'You have been logged in!');

		return Redirect::back()->with('flash_message', 'Invalid Credentials')->withInput();



	}

	public function update($id)
	{
		//
	}

	public function destroy()
	{
		//Log the user out

		Auth::logout();

		return Redirect::home()->with('flash_message', 'You have been logged out.');
	}

}




