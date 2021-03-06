<?php

class ProductsController extends BaseController {

	/**
	 * Product Repository
	 *
	 * @var Product
	 */
	protected $product;

	public function __construct(Product $product)
	{
		$this->product = $product;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = $this->product->all();

		return View::make('products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */

	public function product_display()
	{
		$products = $this->product->all();
		$companies = Company::all();

		return View::make('products.store', compact('products', 'companies'));
	}


	public function create()
	{


	//$category_options = DB::table('product_categories')->lists('category', 'category');

	$category_options = Product_category::lists('category', 'category');

	$company_options = Company::lists('company_name', 'company_name');

	

	return View::make('products.create')->with('company_options', $company_options)->with('category_options', $category_options);

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Product::$rules);

		if ($validation->passes())
		{
			$this->product->create($input);

			//$user = Product::create(['avatar' => Input::file('avatar')]);

			return Redirect::route('products.index');
		}

		return Redirect::route('products.create')
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
		$product = $this->product->findOrFail($id);

		return View::make('products.show', compact('product'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = $this->product->find($id);

		if (is_null($product))
		{
			return Redirect::route('products.index');
		}

		return View::make('products.edit', compact('product'));
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
		$validation = Validator::make($input, Product::$rules);

		if ($validation->passes())
		{
			$product = $this->product->find($id);
			$product->update($input);

			return Redirect::route('products.show', $id);
		}

		return Redirect::route('products.edit', $id)
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
		$this->product->find($id)->delete();

		return Redirect::route('products.index');
	}

}
