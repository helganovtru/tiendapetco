@extends('template')

@section('contenido')
<h1>Registro</h1>
<form action="{{url('/guardarCliente')}}" method="POST">
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
		<label for="descripcion">Usuario:</label>
		<input type="text" class="form-control" name="usuario" required>
	</div>

	<div class="form-group">
		<label for="descripcion">Contraseña:</label>
		<input type="text" class="form-control" name="contraseña" required>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/home')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop