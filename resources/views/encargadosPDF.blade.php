<!DOCTYPE html>
<html>
<head>
	<title>Listado de Encargados</title>
</head>
<body>
	<h1>Sistema de Administración de Proyectos</h1>
	<h2>Listado de Encargados: </h2>
	<hr>
	@foreach($encargados as $e)
		{{$e->nombre}} <br>
	@endforeach
</body>
</html>