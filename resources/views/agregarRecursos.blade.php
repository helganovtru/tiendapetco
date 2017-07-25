@extends('master')

@section('contenido')
@include('flash::message')
	<h2>Proyecto: {{$proyecto->descripcion}}</h2>
	<form action="{{url('/guardarAsignacion')}}/{{$proyecto->id}}" method="POST">
	<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
	<label for="recursos">Recursos no asignados: </label>
		<select name="id_recurso" class="form-control">
			@foreach($recursosNoAsignados as $r)
				<option value="{{$r->id}}">{{$r->nombre}}</option>
			@endforeach
		</select>
		<button type="submit" class="btn btn-primary">Asignar
		</button>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<h3>Recursos agregados al proyecto:</h3>
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nombre del Recurso</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					@foreach($recursosAsignados as $ra)
						<tr>
							<td>{{$ra->nombre}}</td>
							<td>
								<a href="{{url('/eliminarAsignacion')}}/{{$ra->id}}/{{$proyecto->id}}/" class="btn btn-xs btn-danger">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								</a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</form>
	
	<script type="text/javascript">
		setTimeout(function() 
		{
			$(".alert").fadeOut(1500);
		},1500);
	</script>
	@stop