@extends('master')

@section('contenido')
<h1>Registrar Administrador</h1>
<form action="{{url('/guardarAdmin')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<div class="form-group">
		<label for="descripcion">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required>
	</div>

	<div class="form-group">
		<label for="descripcion">Usuario:</label>
		<input type="text" class="form-control" name="usuario" required>
	</div>

	<div class="form-group">
		<label for="descripcion">Contraseña:</label>
		<input type="text" class="form-control" name="contraseña" required>
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/homeadmin')}}" class="btn btn-danger">Cancelar</a>
	</div>	
</form>
@stop