@extends('master')

@section('contenido')

@include('flash::message')
<h1>Consultar Administradores</h1>
<script type="text/javascript">
		setTimeout(function() 
		{
			$(".alert").fadeOut(1500);
		},1500);
</script>

<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($admin as $a)
		<tr>
			<td>{{$a->id}}</td>
			<td>{{$a->nombre}}</td>
			<td>{{$a->usuario}}</td>
			<td>{{$a->contraseña}}</td>
			<td>
				<a href="{{url('/editarAdmin')}}/{{$a->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarAdmin')}}/{{$a->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop