@extends('layouts.scaffold')

@section('main')

<div class="container">

	<div class="row">

		<div class="col-sm-3 col-md-2" style="height:8em; background:#888;">

			<h1>IMAGE</h1>

		</div>

		<div class="col-sm-9 col-mid-10">

			<h1>Product Brochure</h1>

			<div class="col-md-8">

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget pellentesque dui. Morbi vulputate, leo eget iaculis elementum, felis neque iaculis lorem, quis malesuada diam dui eu ante. Nunc a tortor vitae augue sollicitudin ultricies. Sed rutrum iaculis metus, eget pulvinar risus semper sit amet. Nullam nibh eros, dictum feugiat scelerisque in, ultricies eget nunc. Integer adipiscing,</p>
			
			</div>

		</div>

	</div>

	<div class="container">

		<div class="row">

			@foreach ($companies as $comp) 

			<div class="col-md-12">

				<h3>{{{$comp->company_name }}}</h3>

			</div>

			

		</div>

		<div class="row">

			@foreach ($products as $product) 
			

			<div class="col-xs-12 col-sm-6 col-md-5" style="height:14em; background:#fff249;">

				<div class="col-xs-4 col-sm-5 col-md-5" style="height:100%; background: #999;"><h1>IMG</h1></div>

				<div class="col-xs-8 col-sm-7 col-md-7">

				<div class="row"><p>{{{ $product->reference_no}}}</p></div>
				<div class="row" style="margin-top:-20px;"><h3>{{{ $product->product_title }}}</h3></div>
				<div class="row"><p>{{{ $product->description }}}</p></div>
				<div class="row"><p>more information...</p></div>

				</div>

			</div>


			@endforeach

			@endforeach

		</div>

	</div>


</div>


@stop