@extends('template')

@section('contenido')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="imagespetco/carrusel1.jpg" alt="" />
    </div>

    <div class="item">
      <img src="imagespetco/carrusel3.jpg" alt="" />
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="container">
<h1>Productos destacados </h1>
  <table><tr>
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
  </tr></table>

  <center>
    <div>
      <br><img src="imagespetco/mesjulio.jpg" alt="" height="112px" />
      <br><img src="imagespetco/formasdepago.jpeg" alt="" height="74px" />
    </div>
  </center>
</div>
@stop