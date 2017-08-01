@extends('master')

@section('contenido')
<h1>Consultar Categoria</h1>
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
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($cat as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>{{$c->descripcion}}</td>
			<td>
				<a href="{{url('/editarCat')}}/{{$c->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarCat')}}/{{$c->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>
@stop