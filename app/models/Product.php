<?php

class Product extends Eloquent {
	protected $guarded = array();

	public static $rules = array(
		'reference' => 'required',
		'descript' => 'required',
		'img' => 'required',
		'validto' => 'required',
		'turnaround' => 'required',
		'minorder' => 'required'
	);
}
