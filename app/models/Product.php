<?php

class Product extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'reference_no' => 'required',
		'product_title' => 'required',
		'description' => 'required',
		'turnaround' => 'required',
		'min_order' => 'required',
		'valid_until' => 'required',
		'product_category' => 'required',
		'company' => 'required',
		'image' => 'required'
	);
}
