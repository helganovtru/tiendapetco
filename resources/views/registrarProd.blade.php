@extends('master')

@section('contenido')
<h1>Registrar Producto</h1>
<form action="{{url('/guardarProd')}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<div class="form-group">
		<label for="descripcion">Descripción:</label>
		<input type="text" class="form-control" name="descripcion" required>
	</div>

	<div class="form-group">
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
		<input type="text" class="form-control" name="existencia" required>
	</div>

	<div class="form-group">
		<label for="descripcion">Precio Unitario::</label>
		<input type="text" class="form-control" name="precio" required>
	</div>

	<div class="form-group">
	<label for="mascota">Mascota:</label>
		<select name="mascota" class="form-control">
			<option>PERRO </option>
        	<option>GATO </option>
		</select>
	</div>

	<div class="form-group">
	<label for="id_categoria">Categoria:</label>
		<select name="id_categoria" class="form-control">
			@foreach($categoria as $c)
				<option value="{{$c->id}}">{{$c->descripcion}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
    	<label for="imagen" class="col-sm-2 control-label">Imagen:</label>
            <input class="form-control form-control" type="file" id="imagen" name="imagen">
    </div>

	<div>
		<button type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/homeadmin')}}" class="btn btn-danger">Cancelar</a>
	</div>	
</form>
@stop