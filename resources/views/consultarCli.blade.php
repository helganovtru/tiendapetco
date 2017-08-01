@extends('master')

@section('contenido')
<h1>Consultar Cliente</h1>
@include('flash::message')
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
			<th>Correo Electrónico</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($cliente as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->nombre}}</td>
			<td>{{$c->correo}}</td>
			<td>{{$c->usuario}}</td>
			<td>{{$c->contraseña}}</td>
			<td>
				<a href="{{url('/editarCli')}}/{{$c->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarCli')}}/{{$c->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop