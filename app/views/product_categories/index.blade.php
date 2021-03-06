@extends('layouts.scaffold')

@section('main')
<div class="col-xs-6 col-sm-7 col-md-9 header__text">
<h1>Categories</h1>
</div>
<div class="col-xs-6 col-sm-5 col-md-3">

<p>{{ link_to_route('product_categories.create', 'Add New Category', null, array('class' => 'btn btn-lg btn-success')) }}</p>
</div>
@if ($product_categories->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Category</th>
				<th>Description</th>
				<th>Associated_contact</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($product_categories as $product_category)
				<tr>
					<td>{{{ $product_category->category }}}</td>
					<td>{{{ $product_category->cat_description}}}</td>
					<td>{{{ $product_category->associated_contact }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('product_categories.destroy', $product_category->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('product_categories.edit', 'Edit', array($product_category->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no product_categories
@endif

@stop
