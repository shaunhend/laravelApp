@extends('layouts.scaffold')

@section('main')


<div class="col-xs-6 col-sm-7 col-md-9 header__text">
	<h1>Our&nbsp;People</h1>
</div>
<div class="col-xs-6 col-sm-5 col-md-3">
	<p>{{ link_to_route('people.create', 'Add New Contact', null, array('class' => 'btn btn-lg btn-success')) }}</p>
</div>
@if ($people->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($people as $person)
				<tr>
					<td>{{{ $person->name }}}</td>
					<td>{{{ $person->email }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('people.destroy', $person->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('people.edit', 'Edit', array($person->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no people
@endif

@stop
