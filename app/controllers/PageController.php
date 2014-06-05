<?php


class PageController extends BaseController {


	public function home()
	{
		$name = 'Shaun';


		return View::make('hello')->with('name', $name);

	}
}