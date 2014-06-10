@extends('layouts.scaffold')

@section('main')

<h1>Show Product_category</h1>

<p>{{ link_to_route('product_categories.index', 'Return to All product_categories', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Category</th>
			<th>Description</th>
			<th>Associated_contact</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $product_category->category }}}</td>
			<td>{{{ $product-category->cat_description }}}</td>
					<td>{{{ $product_category->associated_contact }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('product_categories.destroy', $product_category->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('product_categories.edit', 'Edit', array($product_category->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
