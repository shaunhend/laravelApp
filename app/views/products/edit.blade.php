@extends('layouts.scaffold')

@section('main')

<div class="row">
    <div class="col-md-10 col-md-offset-2">
        <h1>Edit Product</h1>

        @if ($errors->any())
        	<div class="alert alert-danger">
        	    <ul>
                    {{ implode('', $errors->all('<li class="error">:message</li>')) }}
                </ul>
        	</div>
        @endif
    </div>
</div>

{{ Form::model($product, array('class' => 'form-horizontal', 'method' => 'PATCH', 'route' => array('products.update', $product->id))) }}

        <div class="form-group">
            {{ Form::label('reference', 'Reference:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('reference', Input::old('reference'), array('class'=>'form-control', 'placeholder'=>'Reference')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('descript', 'Descript:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::textarea('descript', Input::old('descript'), array('class'=>'form-control', 'placeholder'=>'Descript')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('img', 'Img:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('img', Input::old('img'), array('class'=>'form-control', 'placeholder'=>'Img')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('validto', 'Validto:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::text('validto', Input::old('validto'), array('class'=>'form-control', 'placeholder'=>'Validto')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('turnaround', 'Turnaround:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'turnaround', Input::old('turnaround'), array('class'=>'form-control')) }}
            </div>
        </div>

        <div class="form-group">
            {{ Form::label('minorder', 'Minorder:', array('class'=>'col-md-2 control-label')) }}
            <div class="col-sm-10">
              {{ Form::input('number', 'minorder', Input::old('minorder'), array('class'=>'form-control')) }}
            </div>
        </div>


<div class="form-group">
    <label class="col-sm-2 control-label">&nbsp;</label>
    <div class="col-sm-10">
      {{ Form::submit('Update', array('class' => 'btn btn-lg btn-primary')) }}
      {{ link_to_route('products.show', 'Cancel', $product->id, array('class' => 'btn btn-lg btn-default')) }}
    </div>
</div>

{{ Form::close() }}

@stop