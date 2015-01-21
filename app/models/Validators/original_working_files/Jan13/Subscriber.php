<?php namespace app\models\Validators;

class Subscriber extends Validator {

	/**
     * The rules for validating the input
     *
     * @var array
     **/
    public static $rules = array(
    		'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
    	);
}