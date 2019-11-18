@extends('usuarios.layout')
@section('content')
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
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" >Ingresar</button>
                                                <button type="submit" class="btn btn-lg btn-block" >Registrase</button>
                                    </form>         
                </div>
            </div>
        </div>
    
        </div> 
    </div>      
@endsection