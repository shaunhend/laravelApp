@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Product_category</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'product_categories.store', 'class' => 'form-horizontal')) }}

        <div class="form-group">
            {{ Form::label('category', 'Category:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('category', Input::old('category'), array('class'=>'form-control', 'placeholder'=>'Category')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('cat_description', 'Description:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::textarea('cat_description', Input::old('cat_description'), array('class'=>'form-control', 'placeholder'=>'cat_description')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('associated_contact', 'Associated_contact:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
                {{ Form::select('associated_contact', $contact, Input::old('associated_contact'), ['class' => 'form-control input-md']) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
    </div>
</div>

{{ Form::close() }}

@stop


