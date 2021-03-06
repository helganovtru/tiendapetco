@extends('master')

@section('contenido')
<h1>Editar Cliente</h1>
<form action="{{url('/actualizarCli')}}/{{$cliente->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text" class="form-control" name="nombre" required value="{{$cliente->nombre}}">
	</div>
	<div class="form-group">
		<label for="correo">Correo Electrónico:</label>
		<input type="text" class="form-control" name="correo" required value="{{$cliente->correo}}">
	</div>
	
	<div class="form-group">
		<label for="descripcion">Usuario:</label>
		<input type="text" class="form-control" name="usuario" required value="{{$cliente->usuario}}">
	</div>

	<div class="form-group">
		<label for="descripcion">Contraseña:</label>
		<input type="text" class="form-control" name="contraseña" required value="{{$cliente->contraseña}}">
	</div>

	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/homeadmin')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop