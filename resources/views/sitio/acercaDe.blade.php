@extends('usuarios.layout')
@section('content')

<style>

.carousel-inner img {
    width: 100%;
    max-height: 400px;
}

.carousel-inner{
 height: 400px;
}
.title {
    font-size: 84px;
    font-family:serif;
    font-style: italic;
    font-weight:400;
    color: #767A81;
}

</style>

<div class="container">
        <ul  class="navbar navbar-light nav justify-content-end" style="background-color: #767A81; " >
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menú</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Tarjeta de la biblioteca</a>
                    <a class="dropdown-item" href="#">Ejemplares Guardados</a>
                    <a class="dropdown-item" href="#">Buscar Historial</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('sitio/')}}">Acerca de este Sitio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="{{url('colecciones/')}}" >Inicio</a>
                </li>
              </ul>
        <div class="title m-b-md" >
            <u>  BIBLIOTECA DIGITAL </u>
        </div>
        <div class="row">
            <div class="col-md-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                  <img src="img/biblioteca1.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/biblioteca2.jpg" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="img/biblioteca3.jpg" class="d-block w-100" alt="...">
                              </div>
                            </div>
                          </div>
                    
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <p><br>La Biblioteca Digital permite en un clic el acceso a todo el material bibliográfico propio y suscrito.
                            Junto a una selección de los mejores registros de acceso abierto que existen en la web, esta plataforma agrupa en total más de 50 millones de recursos de información disponibles para la comunidad.
                            <br>
                            <br>
                            <b>¿Cómo funciona?</b>
                            <br>
                            Un software de última generación permite hacer una búsqueda simultánea en el vasto archivo de libros físicos y electrónicos, revistas, bases de datos especializadas, investigaciones académicas y otras colecciones que almacena.
                            Al ingresar una palabra clave en la Súper Búsqueda se despliegan los resultados disponibles. Este listado se puede ordenar por relevancia, fecha de la publicación, autor o título.
                            Otra manera de llegar a un resultado más preciso es utilizar los filtros y diferenciar por disponibilidad, tipo de recurso, biblioteca, idioma y materia, entre otras opciones.
                            La biblioteca digital permite el acceso a una sesión personalizada para reservar y renovar material, acceder al historial de búsqueda, compartir vía correo electrónico y redes sociales, contar con un listado de favoritos o utilizar gestores de citas.
                            <br>
                            <br>
                            <b>¿Qué recursos están disponibles?</b>
                            <ul class="card-text">
                                <li> Libros impresos y otros materiales</li>
                                <li>Libros electrónicos</li>
                                <li>Artículos de las bases de datos abiertas y suscritas</li>
                                <li> Revistas</li>
                                <li>Tesis</li>
                                <li> Archivos de mapas, afiches, partituras, obras de arte, material audiovisual, manuscritos y fotografías, entre otros</li>
                            </ul>
                        </p>
                    </div>
                    <div class="col-md-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection