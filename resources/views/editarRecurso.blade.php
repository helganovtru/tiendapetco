@extends('master')

@section('contenido')
<form action="{{url('/actualizarRecurso')}}/{{$recurso->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required>
	</div>
	<div class="form-group">
		<label for="correo">Correo Electrónico:</label>
		<input type="text" class="form-control" name="correo" required>
	</div>
	<div class="form-group">
		<label for="edad">Edad:</label>
		<input type="text" class="form-control" name="edad" required>
	</div>
	<div class="form-group">
		<label for="puesto">Puesto:</label>
		<select name="puesto" class="form-control">
			<option selected value="{{$recurso->puesto_id}}">{{$recurso->descripcion}}</option>
			@foreach($puestos as $p)
				<option value="{{$p->id}}">{{$p->descripcion}}</option>
			@endforeach
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop