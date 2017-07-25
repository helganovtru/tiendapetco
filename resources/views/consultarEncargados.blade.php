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
			<th>
				<a href="{{url('/encargadosPDF')}}">PDF</a>
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach($encargados as $a)
		<tr>
			<td>{{$a->id}}</td>
			<td>{{$a->nombre}}</td>
			<td>{{$a->correo}}</td>
			<td>
				<a href="{{url('/editarEncargado')}}/{{$a->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarEncargado')}}/{{$a->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

@stop