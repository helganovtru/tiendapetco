<!DOCTYPE html>
<html>
<head>
	<title>Listado de Recursos</title>
</head>
<body>
<h1>Sistema de Administración de Proyectos</h1>
	<h2>Listado de Recursos: </h2>

	<hr>
	@foreach($recursos as $r)
		{{$r->nombre}} <br>
	@endforeach
</body>
</html>