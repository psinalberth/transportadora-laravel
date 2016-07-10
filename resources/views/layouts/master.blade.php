<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Transportadora</title>
      <link rel="stylesheet" href="/css/app.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css"/>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
      <script type="text/javascript" src="/js/custom.js"></script>
      <script type="text/javascript" src="/js/validation.js"></script>
      <script src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
      <script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyB_5mWADgj7N_Q2OfgRh1IJUp0i0sh3H7M"></script>
  </head>
  <body>
      <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{action('WelcomeController@index')}}">Transportadora::SA</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{action('ClientesController@index')}}"><i class="fa fa-user fa-fw fa-lg"></i>Clientes</a></li>
              <li><a href="{{action('FretesController@index')}}"><i class="fa fa-shopping-cart fa-fw fa-lg"></i>Fretes</a></li>
              <li><a href="#contact"><i class="fa fa-home fa-fw fa-lg"></i>Cidades</a></li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container bs-docs-container">

        @include('layouts.flash')

        @yield('content')
    </div>

    <script>
      $('div.alert').not('.alert-important').delay(2000).slideUp(200);
    </script>

    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>