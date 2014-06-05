<?php

class Product_category extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'category' => 'required',
		'associated_contact' => 'required'
	);
}
