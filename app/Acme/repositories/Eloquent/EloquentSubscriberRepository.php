<?php namespace Acme\repositories\Eloquent;

use acme\repositories\SubscriberRepository;

use app\models\Subscriber;

class EloquentSubscriberRepository implements SubscriberRepository {
	
	public function all()
	{
		return Subscriber::all();
	}

	public function find($id)
	{
		return Subscriber::find($id);
	}

	public function findOrFail($id)
	{
		return Subscriber::findOrFail($id);
	}

	public function create($input)
	{
		$newSubscriber = new Subscriber;
		$newSubscriber->firstname = $input['firstname'];
		$newSubscriber->lastname = $input['lastname'];
		$newSubscriber->email = $input['email'];
		return $newSubscriber->save();
	}

	public function update($id, $input)
	{
        /* When using Input::, make sure the backslash is front of it
        Otherwise it will not work! */

       	$subscriber = Subscriber::find($id);
		$subscriber->firstname = $input['firstname'];
		$subscriber->lastname = $input['lastname'];
		$subscriber->email = $input['email'];
		$subscriber->touch();
		return $subscriber->save();
	}

	public function delete($id)
	{
		$subscriber = Subscriber::find($id);
		return $subscriber->delete();
	}

	public function forceDelete($id)
	{
		$subscriber = Subscriber::find($id);
		return $subscriber->forceDelete();
	}

	public function restore($id)
	{
		$subscriber = Subscriber::withTrashed()->find($id);
		return $subscriber->restore();
	}
}