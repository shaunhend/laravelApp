<?php

class Person extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'name' => 'required',
		'email' => 'required',
		'people_category' => 'required'
	);
}
