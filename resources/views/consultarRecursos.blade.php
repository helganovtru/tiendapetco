@extends('master')

@section('contenido')

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
			<th>Edad</th>
			<th>Puesto</th>
			<th>
				<a href="{{url('/recursosPDF')}}">PDF</a>
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach($recursos as $r)
		<tr>
			<td>{{$r->id}}</td>
			<td>{{$r->nombre}}</td>
			<td>{{$r->correo}}</td>
			<td>{{$r->edad}}</td>
			<td>{{$r->descripcion}}</td>
			<td>
				<a href="{{url('/editarRecurso')}}/{{$r->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarRecurso')}}/{{$r->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop