<!DOCTYPE html>
<html>
<head>
	<title>PetCo México</title>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}"">
</head>
<body>

<div>
  <center>
    <br>
    <img src="imagespetco/wherethepetsgo.png"/>
    <br>
    <br>
      <a href="https://www.facebook.com/Petco.Mexico/"><img src="imagespetco/facebooklogo.png"  /></a>
      <a href="https://twitter.com/petcomexico?lang=es"><img src="imagespetco/twitterlogo.png"   /></a>
    <br>
    <br>
  </center>
</div>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/homecliente  ')}}">Inicio</a>
      <a class="navbar-brand" href="{{url('/catalogoProd')}}">Productos</a>
    </div>

    <div class="nav navbar-nav navbar-right">
      <a class="navbar-brand" href="{{url('/registrarme')}}">Registrarme | </a>
      <a class="#""><img src="imagespetco/cart.png" height="50ox" /></a>

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

<div>
      <img src="imagespetco/largeblank.jpg" height="85ppx"/>
  </div>

<center>
<footer class="text-center">
  <center>
    <table>
      <thead>
      <tr>
        <th>
            <div>
              <img src="imagespetco/petcofundation.png" height="85ppx"/>
          </div>
          </th>

          <th>
            <div>
              <img src="imagespetco/blankimage.jpg" height="85ppx"/>
          </div>
          </th>

          <th>
            <div>
            <br><a><span class="glyphicon glyphicon-earphone">  (667) 475 59 65 </span></a>
            <br><a><span class="glyphicon glyphicon-envelope">  info@petco.com.mx</span></a>

          </div>
          </th>
      </tr>
    </thead>
  </table>
</center>
  <br>
  <br>
  <p> Petco México &copy; 2017 by Helga Novelo </p>
 </footer>
</center>

  <script src="{{asset("js/jquery-3.2.1.js")}}"></script>
  <script src="{{asset("js/bootstrap.js")}}"></script>
  <script src="{{asset("js/pinterest_grid.js")}}"></script>
</body>
</html>