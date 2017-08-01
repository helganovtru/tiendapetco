@extends('template')

@section('contenido')
<h1>Detalles del producto</h1>
<center>
<table>
  <tr>
    <th>
      <div>
            <img src="imagespetco/imagesprod/{{$prod->imagen}}" />
      </div>
    </th>

    <th>
        <div>
            <h2>{{$prod->descripcion}}</h2>
            <br>En existencia: {{$prod->existencia}}
            <br>Talla: {{$prod->talla}}
            <br>Precio: ${{$prod->precio}}
        </div>

        <div>
          <br><br><a href="#" class="btn btn-danger">Agregar al carrito</a>
    </div>
    </th>
  </tr>
</table>
</center>

@stop