@extends('layouts.scaffold')

@section('main')

<h1>Show Person</h1>

<p>{{ link_to_route('people.index', 'Return to All people', null, array('class'=>'btn btn-lg btn-primary')) }}</p>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Name</th>
				<th>Email</th>
		</tr>
	</thead>

	<tbody>
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
	</tbody>
</table>

@stop
