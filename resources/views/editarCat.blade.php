@extends('master')

@section('contenido')
<h1>Editar Categoria</h1>
<form action="{{url('/actualizarCat')}}/{{$cat->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" required value="{{$cat->descripcion}}">
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/homeadmin')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>

@stop