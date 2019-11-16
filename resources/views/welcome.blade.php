<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                font-family:serif;
                font-style: italic;
                font-weight:400;
                color: #767A81;
            }
            .fondo{
                background-image: url('../img/descarga.jpg'); 
            }

            .links > a {
                color: #0C0B0B;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="fondo">
            <div class="container">
                    <ul  class="navbar navbar-light nav justify-content-end" style="background-color: #767A81; " >
                            <li class="nav-item">
                              <a class="nav-link active" href="#">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menú</a>
                              <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Tarjeta de la biblioteca</a>
                                <a class="dropdown-item" href="#">Ejemplares Guardados</a>
                                <a class="dropdown-item" href="#">Buscar Historial</a>
                              </div>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Acerca de este Sitio</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link " href="#" >Ayuda</a>
                            </li>
                          </ul>

                  
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" >
                  <u>  BIBLIOTECA DIGITAL </u>
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">INICIO DE SESION</a>
                    <a href="https://laracasts.com">DESCUBRE NUESTRAS COLECCIONES</a>
                    <a href="https://laravel-news.com">ACERCA DE ESTE SITIO</a>
                    <a href="https://blog.laravel.com">NAVEGAR POR ETIQUETAS</a>
                </div>
            </div>
        </div>
         </div>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
