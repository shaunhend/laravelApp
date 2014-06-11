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

            @yield('main')

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