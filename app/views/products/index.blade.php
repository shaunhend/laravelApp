@extends('layouts.scaffold')

@section('main')

<div class="col-xs-6 col-sm-7 col-md-9 header__text">
<h1>Products</h1>
</div>
<div class="col-xs-6 col-sm-5 col-md-3">
<p>{{ link_to_route('products.create', 'Add New Product', null, array('class' => 'btn btn-lg btn-success')) }}</p>
</div>

@if ($products->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Reference No.</th>
				<th>Title</th>
				<th>Category</th>
				<th>Company</th>
				<th>Turnaround</th>
				<th>Minimum Order</th>
				<th>Valid Until</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($products as $product)
				<tr>
					<td>{{{ $product->reference_no }}}</td>
					<td>{{{ $product->product_title }}}</td>
					<td>{{{ $product->product_category }}}</td>
					<td>{{{ $product->company }}}</td>
					<td>{{{ $product->turnaround }}} weeks</td>
					<td>{{{ $product->min_order }}}</td>
					<td>{{{ $product->valid_until }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('products.destroy', $product->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('products.edit', 'Edit', array($product->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no products
@endif

@stop
