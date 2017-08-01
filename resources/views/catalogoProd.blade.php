@extends('template')

@section('contenido')
	<h1>Nuestros productos </h1>
	<table><thead>
	<tr>
		@foreach($prod as $p)
					<th>
						<div align="center">
							<br><br><img src="imagespetco/imagesprod/{{$p->imagen}}" width="200" />
						</div>

						<div>
							<h4><br>{{$p->descripcion}}
							<br>Precio: ${{$p->precio}}</h4>
						
							<div align="center">
								<a href="{{url('/mostrarDetalle')}}/{{$p->id}}" class="btn btn-primary">Ver detalles</a>
							</div>
						</div>

						<div>
							<img src="imagespetco/blankimage.jpg"/>
							<img src="imagespetco/blankimage.jpg"/>
							<img src="imagespetco/blankimage.jpg"/>
						</div>
					</th>
		@endforeach
	</tr>
	</thead></table>
</div>
@stop