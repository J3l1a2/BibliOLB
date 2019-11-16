<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .login{
            position:absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, 40%);
        }
        .boody{
            height: 100%;
            position: relative;
        }
        .title{
            position:relative;
        }
        .img{
            position:absolute;
            top:100%;
            left:80%;
            width:90%;
            transform: translate( -70%, 50%); 
        }
    
    
    </style>
    
  </head>
  <body>
        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <img src="../img/images.jpg" class="img" >
                    </div>
                    <div class="col-md-6">
                            <div class="flex-center position-ref full-height">
                                    <div class="container">
                                        <form class="login">
                                            <div class="title">
                                            <span class="login100-form-title p-b-43" >
                                                Inicia Sesion Para Continuar
                                            </span>
                                            </div>
                                             <div class="form-group">
                                                <label for="exampleInputEmail1">Correo</label>
                                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                                <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo con nadie.</small>
                                             </div>
                                               <div class="form-group">
                                                  <label for="exampleInputPassword1">Contraseña</label>
                                                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                                </div>
                                                <div class="flex-sb-m w-full p-t-3 p-b-32">
                                                        <div class="contact100-form-checkbox">
                                                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                                                            <label class="label-checkbox100" for="ckb1">
                                                                Recordar
                                                            </label>
                                                            <br>
                                                            <a href="#" class="txt1">
                                                                    Se te olvido tu contraseña?
                                                            </a>
                                                        </div>
                        
                                                </div> 
                                                     <br>   
                                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
                                        </form>         
                    </div>
                </div>
            </div>
        
            </div> 
        </div>      
      
        @yield('content')

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>        
  </body>
</html>