@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Create Product</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::open(array('route' => 'products.store', 'class' => 'form-horizontal', 'files' => true)) }}

        <div class="form-group">
            {{ Form::label('reference_no', 'Reference_no:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('reference_no', Input::old('reference_no'), array('class'=>'form-control', 'placeholder'=>'Reference_no')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('product_title', 'Product_title:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('product_title', Input::old('product_title'), array('class'=>'form-control', 'placeholder'=>'Product_title')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('description', Input::old('description'), array('class'=>'form-control', 'placeholder'=>'Description')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('turnaround', 'Turnaround:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'turnaround', Input::old('turnaround'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('min_order', 'Min_order:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'min_order', Input::old('min_order'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('valid_until', 'Valid_until:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('valid_until', Input::old('valid_until'), array('class'=>'form-control', 'placeholder'=>'Valid_until')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('product_category', 'Product_category:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::select('product_category', $category_options , Input::old('product_category'), ['class' => 'form-control input-md']) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('company', 'Company:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
            {{ Form::select('company', $company_options, Input::old('company'), ['class' => 'form-control input-md']) }}
            </div>
        </div>

        <!--<div class="form-group">
            {{ Form::label('image', 'Image:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('image', Input::old('image'), array('class'=>'form-control', 'placeholder'=>'Image')) }}
            </div>
        </div>-->


       <div class="form-group">
            {{ Form::label('image', 'Image:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::file('avatar') }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Create', array('class' => 'btn btn-lg btn-primary')) }}
    </div>
</div>

{{ Form::close() }}

      <!--{{ Form::open(array('route' => 'products.store', 'class' => 'form-horizontal dropzone', 'id' => 'my-awesome-dropzone', 'files' => true)) }}
        {{ Form::close() }}-->

@stop


