<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/dropzone.css') }}">
</head>

<body>

    <div class="navbar navbar-default navbar-static-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/products">Fifth Ring</a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="/products">Products</a></li>
            <li><a href="/product_categories">Categories</a></li>
            <li><a href="/companies">Companies</a></li>
            <li><a href="/people">Our People</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (Session::has('message'))
                <div class="flash alert">
                    <p>{{ Session::get('message') }}</p>
                </div>
            @endif


<div class="container">

	<div class="row">

		<div class="col-sm-3 col-md-2" style="height:8em; background:#888;">

			<h1>IMAGE</h1>

		</div>

		<div class="col-sm-9 col-mid-10">

			<h1>Product Brochure</h1>

			<div class="col-md-8" style="margin-left:-15px;">

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget pellentesque dui. Morbi vulputate, leo eget iaculis elementum, felis neque iaculis lorem, quis malesuada diam dui eu ante. Nunc a tortor vitae augue sollicitudin ultricies. Sed rutrum iaculis metus, eget pulvinar risus semper sit amet. Nullam nibh eros, dictum feugiat scelerisque in, ultricies eget nunc. Integer adipiscing,</p>
			
			</div>

		</div>

	</div>

	<div class="container">


		@foreach ($companies as $comp) 
		<div class="row">

			

			<div class="col-md-12">

				<h3>{{{$comp->company_name }}}</h3>

			</div>

			
		</div>

		<div class="row" style="margin-bottom: 1em;">
			<?php $comp2 = $comp->company_name;

			$products2 = Product::where('company', '=', $comp2)->get(); ?>
			@foreach ($products2 as $product) 
			

			<div class="col-xs-12 col-sm-6 col-md-5" style="height:14em; margin-bottom: 1em;">

				<div class="col-xs-5 col-sm-6 col-md-5" style="height:100%; margin-left:-15px;"><img src="<?= $product->avatar->url('portrait') ?>" ></div>

				<div class="col-xs-7 col-sm-6 col-md-7">

				<div class="row"><p>{{{ $product->reference_no}}}</p></div>
				<div class="row" style="margin-top:-20px;"><h3>{{{ $product->product_title }}}</h3></div>
				<div class="row"><p>{{{ $product->description }}}</p></div>
				<div class="row"><p>more information...</p></div>

				</div>

			</div>


			@endforeach

			

		</div>

		@endforeach

	</div>


</div>



        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ URL::asset('js/vendor/bootstrap.min.js') }}"></script>
    <!--<script src="{{ URL::asset('js/dropzone.js') }}"></script>-->

</body>
</html>