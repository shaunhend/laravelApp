<?php

class Product_categoriesController extends BaseController {

	/**
	 * Product_category Repository
	 *
	 * @var Product_category
	 */
	protected $product_category;

	public function __construct(Product_category $product_category)
	{
		$this->product_category = $product_category;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$product_categories = $this->product_category->all();

		return View::make('product_categories.index', compact('product_categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('product_categories.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Product_category::$rules);

		if ($validation->passes())
		{
			$this->product_category->create($input);

			return Redirect::route('product_categories.index');
		}

		return Redirect::route('product_categories.create')
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
		$product_category = $this->product_category->findOrFail($id);

		return View::make('product_categories.show', compact('product_category'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product_category = $this->product_category->find($id);

		if (is_null($product_category))
		{
			return Redirect::route('product_categories.index');
		}

		return View::make('product_categories.edit', compact('product_category'));
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
		$validation = Validator::make($input, Product_category::$rules);

		if ($validation->passes())
		{
			$product_category = $this->product_category->find($id);
			$product_category->update($input);

			return Redirect::route('product_categories.show', $id);
		}

		return Redirect::route('product_categories.edit', $id)
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
		$this->product_category->find($id)->delete();

		return Redirect::route('product_categories.index');
	}

}
