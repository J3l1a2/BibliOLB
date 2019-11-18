@extends('usuarios.layout')
@section('content')
<style>
    .title{
        font-size: 50px;
        font-family:serif;
        font-weight:400;
        color: #F0F018;
    }
    .img1{
        position:absolute;
            top:100%;
            left:80%;
            width:90%;
            transform: translate( -335%, -60%); 
    }
    .img3{
        position:absolute;
            top:100%;
            left:80%;
            width:-100%;
            transform: translate( -200%, -60%); 
    }
    .img2{
        position:absolute;
            top:100%;
            left:80%;
            width:90%;
            transform: translate( -70%, -180%);
    }
    .img4{
        position:absolute;
            top:100%;
            left:80%;
            width:90%;
            transform: translate( -60%, -60%);
    }
    .img5{
        position:absolute;
            top:100%;
            left:80%;
            width:90%;
            transform: translate( -330%, 60%);
    }
    .img6{
        position:absolute;
            top:100%;
            left:80%;
            width:90%;
            transform: translate( -200%, 60%);
    }
    .img7{
        position:absolute;
            top:100%;
            left:80%;
            width:90%;
            transform: translate( -60%, 60%);
    }
    .img9{
        position:absolute;
            top:100%;
            left:80%;
            width:90%;
            transform: translate( -200%, -180%);
    }
</style>
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
    <u>Descubre nuestras colecciones</u>
  </div>
  <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                            <div class="card-body">
                              <h6 class="card-subtitle mb-2 text-muted">Accede a todos los recursos de información disponibles en nuestro sitio:</h6>
                              <ul class="card-text">
                                    <li>logo de bibliotecas y archivos</li>
                                    <li>Repositorio académico institucional</li>
                                    <li>Revistas y bases de datos suscritas</li>
                                    <li>Libros</li>
                                    <li>Tesis</li>
                              </ul>
                              <a href="{{url('sitio/')}}" class="card-link">Acerca de este sitio</a>
                              <a href="{{url('colecciones/')}}" class="card-link">Inicio</a>
                            </div>
                          </div>
                          <br>
                          
                          <div class="card" style="width: 18rem ">
                                <div class="card-body">
                                  <p class="card-text">Catalogo bello ahora es parte de biblioteca digital.</p>
                                </div>
                            </div>
            </div>
            <div class="col-md-8">
                <div class="panel-body">
                    <div class="row">
                    <div class="col-md-3 img1">
                        <img src="img/images.png"><center><a href="{{url('biblio/impresos/')}}" class="card-link">Libros impresos</a></center>
                    </div>
                    <div class="col-md-3 ">
                        <img src="img/descarga.png"><center><a href="{{url('biblio/electronicos/')}}" class="card-link">libros electronicos</a></center> 
                    </div>
                    <div class="col-md-3 img9">
                        <img src="img/descarga1.png"><center><a href="{{url('biblio/revistas/')}}" class="card-link">Articulos de revistas</a></center> 
                    </div>
                    <div class="col-md-3 img2">
                        <img src="img/descarga2.png"><center><a href="{{url('biblio/tesis/')}}" class="card-link">Tesis</a></center>   
                    </div>
                    <div class="col-md-3 img3">
                        <img src="img/descarga3.png"><center><a href="{{url('biblio/fotografias/')}}" class="card-link">Fotografias</a></center>   
                    </div>
                    <div class="col-md-3 img4">
                        <img src="img/descarga4.png"><center><a href="{{url('biblio/arte/')}}" class="card-link">Obras de arte</a></center>   
                    </div>
                    <div class="col-md-3 img5">
                        <img src="img/images1.png"><center><a href="{{url('biblio/artesanias/')}}" class="card-link">Artesanías</a></center>   
                    </div>
                    <div class="col-md-3 img6">
                        <img src="img/images2.png"><center><a href="{{url('biblio/Obmedicos/')}}" class="card-link">Objetos medicos</a></center>   
                    </div>
                    <div class="col-md-3 img7">
                        <img src="img/descarga5.png"><center><a href="{{url('biblio/afiches/')}}" class="card-link">Afiches</a></center>   
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection