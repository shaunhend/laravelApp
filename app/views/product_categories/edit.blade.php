@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Edit Product_category</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($product_category, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('product_categories.update', $product_category->id))) }}

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
              {{ Form::text('associated_contact', Input::old('associated_contact'), array('class'=>'form-control', 'placeholder'=>'Associated_contact')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
      {{ link_to_route('product_categories.show', 'Cancel', $product_category->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop