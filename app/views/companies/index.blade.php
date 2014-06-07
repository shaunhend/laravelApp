@extends('layouts.scaffold')

@section('main')

<div class="col-xs-6 col-sm-7 col-md-9 header__text">
	<h1>Companies</h1>
</div>
<div class="col-xs-6 col-sm-5 col-md-3">
	<p>{{ link_to_route('companies.create', 'Add New Company', null, array('class' => 'btn btn-lg btn-success')) }}</p>
</div>
@if ($companies->count())
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Company_name</th>
				<th>&nbsp;</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($companies as $company)
				<tr>
					<td>{{{ $company->company_name }}}</td>
                    <td>
                        {{ Form::open(array('style' => 'display: inline-block;', 'method' => 'DELETE', 'route' => array('companies.destroy', $company->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                        {{ link_to_route('companies.edit', 'Edit', array($company->id), array('class' => 'btn btn-info')) }}
                    </td>
				</tr>
			@endforeach
		</tbody>
	</table>
@else
	There are no companies
@endif

@stop
