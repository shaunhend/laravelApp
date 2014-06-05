<?php

class PeopleController extends BaseController {

	/**
	 * Person Repository
	 *
	 * @var Person
	 */
	protected $person;

	public function __construct(Person $person)
	{
		$this->person = $person;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$people = $this->person->all();

		return View::make('people.index', compact('people'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('people.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Person::$rules);

		if ($validation->passes())
		{
			$this->person->create($input);

			return Redirect::route('people.index');
		}

		return Redirect::route('people.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$person = $this->person->findOrFail($id);

		return View::make('people.show', compact('person'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$person = $this->person->find($id);

		if (is_null($person))
		{
			return Redirect::route('people.index');
		}

		return View::make('people.edit', compact('person'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Person::$rules);

		if ($validation->passes())
		{
			$person = $this->person->find($id);
			$person->update($input);

			return Redirect::route('people.show', $id);
		}

		return Redirect::route('people.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->person->find($id)->delete();

		return Redirect::route('people.index');
	}

}
