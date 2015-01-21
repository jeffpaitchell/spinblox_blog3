<?php

use Acme\repositories\SubscriberRepository;

use app\models\Subscriber;

use app\models\Validators as Validators;

class SubscriberController extends BaseController {
	
	/* 
	* The Subscriber model
	*/

	protected $subscriber;

	/*
	* The Layout
	*/

	protected $layout = 'layouts.master';

	/*
	* Instantiate the controller
	*/

	public function __construct(SubscriberRepository $subscriber)
	{
		$this->subscriber = $subscriber;
	}


	public function index()
	{
		$totalSubscribers = Subscriber::all();
		$allSubscribers = Subscriber::paginate(10);
		$this->layout->content = \View::make('home.admin_subscribers', array('allSubscribers' => $allSubscribers, 'totalSubscribers' => $totalSubscribers));
	}

	/*
	* Show the form for creating a new resource
	*/

	public function create()
	{
		$data = array('type' => 'subscriber');
		$this->layout->content = \View::make('forms.new_subscriber', $data);
	}

	/*
	* Store a newly created resource in storage
	*/

	public function store()
	{

		$input = Input::all();

		$validation = new Validators\Subscriber;
				
		if($validation->passes())
		{
			$subscriber = new Subscriber;
			$subscriber->firstname = Input::get('firstname');
			$subscriber->lastname = Input::get('lastname');
			$subscriber->email = Input::get('email');
			$subscriber->save();

			Mail::send('home.email_welcome', array('firstname'=>Input::get('firstname')), function($message){
				$message->to(Input::get('email'), Input::get('firstname'). ' '.Input::get('lastname'))->subject('Welcome to the SpinBlox Laravel Newsletter!');
			});

			return \Redirect::route('overview')
			->with('message', 'Subscribed to Newsletter Successfully!');

		} else {
			return \Redirect::back()
			->withInput()
			->withErrors($validation->errors)
			->with('message', 'Could not register your information.  Please try again.');
		}


		return Redirect::back()->with('flash_message', 'Invalid Credentials')->withInput();



	}


/**
	* Display the specified subscriber's information for the admin
	* 
	* @param int $id ID of the blog
	* @return \Illuminate\View\View
	*/

	public function show($id)
	{
		$subscriber = $this->subscriber->findOrFail($id);
		$this->layout->content = \View::make('home.subscriber', array('subscriber' =>$subscriber));
	}


/**
	* Show the form for editing the specified subscriber.
	* This should only be done by the admin.
	* @param int $id Id of the blog
	* @return \Illuminate\View\View
	*/
	public function edit($id)
	{
		$subscriber = $this->subscriber->find($id);

		if(is_null($id))
		{
			return \Redirect::to('home.index');
		}

		$data = array('type' => 'subscriber', 'subscriber' => $subscriber);
		$this->layout->content = \View::make('forms.edit_subscriber', $data);

	}

/**
	* Update the specified subscriber in the database.
	* @param int $id Id of the subscriber
	* @return \Illuminate\View\View
	*/

	public function update($id)
	{
		$input = \Input::all();

		$validation = new Validators\Subscriber($input);

		if ($validation->passes())
		{
			$subscriber = Subscriber::find($id);
			$subscriber->firstname = $input['firstname'];
			$subscriber->lastname = $input['lastname'];
			$subscriber->email = $input['email'];
			$subscriber->touch();
			$subscriber->save();

			return \Redirect::route('show_subscriber', array('id' => $id));
		}
		else
		{
			return \Redirect::route('edit_subscriber', array('id' => $id))
			->withInput()
			->withErrors($validation->errors)
			->with('message', 'Could not edit subscriber.');
		}

	}

/**
	* Remove the subscriber from the database
	*
	* @param int $id Id of the blog
	* @return \Illuminate\View\View
	*/	

	public function destroy($id)
	{
		$this->subscriber->delete($id);
		return \Redirect::route('subscribers_overview'); 
	}




}