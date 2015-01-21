<?php namespace app\models\Validators;

class SpinBlox_Blog extends Validator {

	/**
     * The rules for validating the input
     *
     * @var array
     **/
    public static $rules = array(
    		'blog_name' => 'required',
            'blog_description' => 'max:255',
    	);
}