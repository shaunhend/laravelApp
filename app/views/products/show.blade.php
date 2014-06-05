@extends('layouts.scaffold')

@section('main')

<h1>Show Product</h1>

<p>{{ link_to_route('products.index', 'Return to All products', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Reference_no</th>
				<th>Product_title</th>
				<th>Description</th>
				<th>Turnaround</th>
				<th>Min_order</th>
				<th>Valid_until</th>
				<th>Product_category</th>
				<th>Company</th>
				<th>Image</th>
		</tr>
	</thead>

	<tbody>
		<tr>
			<td>{{{ $product->reference_no }}}</td>
					<td>{{{ $product->product_title }}}</td>
					<td>{{{ $product->description }}}</td>
					<td>{{{ $product->turnaround }}}</td>
					<td>{{{ $product->min_order }}}</td>
					<td>{{{ $product->valid_until }}}</td>
					<td>{{{ $product->product_category }}}</td>
					<td>{{{ $product->company }}}</td>
					<td>{{{ $product->image }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('products.destroy', $product->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-info')) }}
                    </td>
		</tr>
	</tbody>
</table>

@stop
