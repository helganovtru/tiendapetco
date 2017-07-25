<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Administración de Proyectos</title>
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
      <a class="navbar-brand" href="{{url('/')}}">Inicio</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registrar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/registrarProyecto')}}">Registrar Proyecto</a></li>
            <li><a href="{{url('/registrarEncargado')}}">Registrar Encargado</a></li>
            <li><a href="{{url('/registrarRecurso')}}">Registrar Recurso</a></li>
            <li><a href="{{url('/registrarPuesto')}}">Registrar Puesto</a></li>
            
          </ul>
        </li>

        <li>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Consultar <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/consultarProyectos')}}">Consultar Proyectos</a></li>
            <li><a href="{{url('/consultarEncargados')}}">Consultar Encargados</a></li>
            <li><a href="{{url('/consultarRecursos')}}">Consultar Recursos</a></li>
            <li><a href="{{url('/consultarPuestos')}}">Consultar Puestos</a></li>
          
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
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
	<hr> Helga Novelo, Negocios Electrónicos &copy; 2017
</footer>
<script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>