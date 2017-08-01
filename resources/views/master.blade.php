<!DOCTYPE html>
<html>
<head>
	<title>PetCo México</title>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}"">
	<script src="{{asset("js/jquery-3.2.1.js")}}"></script>
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/homeadmin')}}"><img src="imagespetco/petcologoblanco.png" height="155%" /></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrarProd')}}">Producto</a></li>
            <li><a href="{{url('/registrarCat')}}">Categoria/a></li>
            <li><a href="{{url('/registrarAdmin')}}">Administrador</a></li>
            <li><a href="{{url('/registrarCli')}}">Cliente</a></li>
            
          </ul>
        </li>

        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/consultarProd')}}">Productoss</a></li>
            <li><a href="{{url('/consultarCat')}}">Categorias</a></li>
            <li><a href="{{url('/consultarAdmin')}}">Administradores</a></li>
            <li><a href="{{url('/consultarCli')}}">Clientes</a></li>
          </ul>
        </li>
      </ul>
      
    

    <div class="nav navbar-nav navbar-right">
      <a class="navbar-brand" href="{{url('/')}}">Cerrar Sesión</a>
    </div>
  </div>
</div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
		@yield('contenido')
		</div>
	</div>
</div>

<footer class="text-center">
	<hr> Petco México &copy; 2017 by Helga Novelo
</footer>
<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>