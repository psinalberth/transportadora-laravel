<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Transportadora</title>
      <link rel="stylesheet" href="/css/app.css"> 
  </head>
  <body>
      <nav class="navbar navbar-light navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{action('WelcomeController@index')}}">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{action('ClientesController@index')}}"><i class="fa fa-user fa-fw fa-lg"></i>Clientes</a></li>
              <li><a href="{{action('FretesController@index')}}"><i class="fa fa-truck fa-fw fa-lg"></i>Fretes</a></li>
              <li><a href="#contact"><i class="fa fa-home fa-fw fa-lg"></i>Cidades</a></li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container bs-docs-container">
        @yield('content')
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>