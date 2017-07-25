<!DOCTYPE html>
<html>
<head>
	<title>Listado de Proyectos</title>
</head>
<body>
	<h1>Sistema de Administración de Proyectos</h1>
	<h2>Listado de Puestos: </h2>

	<hr>
	@foreach($proyectos as $p)
		{{$p->descripcion}} <br>
	@endforeach
</body>
</html>