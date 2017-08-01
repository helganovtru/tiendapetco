@extends('master')

@section('contenido')
<h1>Editar Producto</h1>
<form action="{{url('/actualizarProd')}}/{{$prod->id}}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" required value="{{$prod->descripcion}}">
	</div>

	<div class="form-group" value="{{$prod->talla}}">
	<label for="talla">Talla:</label>
		<select name="talla" class="form-control">
			<option>XXL </option>
        	<option>XS </option>
        	<option>S </option>
        	<option>M </option>
        	<option>L </option>
        	<option>XL </option>
		</select>
	</div>

	<div class="form-group">
		<label for="descripcion">Existencia:</label>
		<input type="text" class="form-control" name="existencia" required value="{{$prod->existencia}}">
	</div>

	<div class="form-group">
		<label for="descripcion">Precio Unitario::</label>
		<input type="text" class="form-control" name="precio" required value="{{$prod->precio}}">
	</div>

	<div class="form-group">
	<label for="ocupacion">Mascota:</label>
		<select name="mascota" class="form-control" value="{{$prod->mascota}}">
			<option>PERRO </option>
        	<option>GATO </option>
		</select>
	</div>

	<div class="form-group">
	<label for="id_categoria">Categoria:</label>
		<select name="id_categoria" class="form-control" value="{{$prod->descripcion}}">
			@foreach($cat as $c)
				<option value="{{$c->id}}">{{$c->descripcion}}</option>
			@endforeach
		</select>
	</div>
	
	<div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
		<a href="{{url('/homeadmin')}}" class="btn btn-danger">Cancelar</a>
	</div>
</form>
@stop