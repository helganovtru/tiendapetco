<!DOCTYPE html>
<html>
<head>
	<title>Listado de recursos asignados a Proyectos</title>
</head>
<body>
	<h1>Sistema de Administración de Proyectos</h1>

	<h2>Proyecto: {{$proyecto->descripcion}}</h2>
	<h2>Listado de recursos asignados al proyecto: </h2>

	<hr>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Recurso</th>
			</tr>
		</thead>
	
	<tbody>
	
	@foreach($recursos_proyectos as $rp)
	<tr>
	<td>{{$rp->nombre}}</td><br>
	@endforeach
	</tr>
	</tbody>
</table>				
</body>
</html>