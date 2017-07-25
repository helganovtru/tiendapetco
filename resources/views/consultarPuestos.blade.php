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
			<th>Descripción</th>
			<th>
				<a href="{{url('/puestosPDF')}}">PDF</a>
			</th>
		</tr>
	</thead>
	<tbody>
	@foreach($puestos as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->descripcion}}</td>
			<td>
				<a href="{{url('/editarPuesto')}}/{{$p->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarPuesto')}}/{{$p->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop