@extends('master')

@section('contenido')
<h1>Consultar Productos</h1>
@include('flash::message')
<table class="table table-hover">
	<thead>
		<tr>
			<th>ID</th>
			<th>Descripción</th>
			<th>Existencias</th>
			<th>Precio Unitario</th>
			<th>Talla</th>
			<th>Mascota</th>
			<th>Categoria</th>
			<th>Imagen</th>
			<th>Opciones</th>
		</tr>
	</thead>
	<tbody>
	@foreach($prod as $p)
		<tr>
			<td>{{$p->id}}</td>
			<td>{{$p->descripcion}}</td>
			<td>{{$p->existencia}}</td>
			<td>{{$p->precio}}</td>
			<td>{{$p->talla}}</td>
			<td>{{$p->mascota}}</td>
			<td>{{$p->id_categoria}}</td>
			<td><img src="imagespetco/imagesprod/{{$p->imagen}}" height="80px"/></td>
			<td>		
				<a href="{{url('/editarProd')}}/{{$p->id}}" class="btn btn-xs btn-primary">
					<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
				</a>
				<a href="{{url('/eliminarProd')}}/{{$p->id}}" class="btn btn-xs btn-danger">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
			</td>
		</tr>
	@endforeach
	</tbody>
</table>

<script type="text/javascript">
		setTimeout(function() 
		{
			$(".alert").fadeOut(1500);
		},1500);
</script>

@stop