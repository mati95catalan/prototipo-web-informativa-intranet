<?php 
require_once("../../model/conexion.php");

session_start();
$error ="";
include("../../model/loginProcesor.php");

?>

<!doctype html>
<html lang="en" >
  <head>
    <title>INTRANET CESFAM SABAT</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../libreria/css/login/logins.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <body class="h-100 ">
</head>
<body class="">
    <div class="container-fluid ">
        <div class="row h-100">
        <div class="col-lg-6 d-flex align-items-center hidden-lg visible-lg mx-auto d-block border border-right shadow login-bg" alt="Responsive image" style=" min-height: 100vh;">  
                <div class="row mt-2 justify-content-center">
                    <div class="col-md-3 mt-2 "><img class="login-img" src="../../libreria/img/logos/desam_2.png"></div>
                </div>                
        </div>
        <div class="col-lg-6 d-flex justify-content-center " style="margin-top:3%" >
            <form class="needs-validation" id="idForm"  autocomplete="off" method="POST" >
                <div class="mb-5 mt-5">
                    <img class="mx-auto d-block"src="../../libreria/img/logos/Sabat.png">
                </div>
                <hr class="shadow-sm">
                <legend class="text-center mb-5">
                    <h1 class="text-secondary"><strong >INTRANET CESFAM SABAT</strong></h1>
                    
                </legend>
                <input type="hidden" value="4540a50b53a94c258d168cef590c39ed" name="csrf_token">
                <div class="form-group">
                    <label for="">Usuario</label>
                    <input type="text" name="txtUsuario" class="form-control form-control-lg"  maxlength="15" required>
                </div>
                <div class="form-group">
                    <label for="">Contraseña</label>
                    <input type="password" name="txtContrasena" class="form-control form-control-lg" maxlength="15" required>
                </div>
                <div class="form-group">
                    <button type="submit"  class="btn btn-lg btn-info btn-block shadow-sm ">Ingresar</button>
                </div>   
            </form>
            
        </div>
       
    </div>
</div>
<script type="application/javascript" src="https://www.hbvaldivia.cl/core/assets/jquery/jquery-3.5.1.min.js" referrerpolicy="same-origin"></script>
</body>

    <script  language="javascript" src="../../libreria/js/validaciones.js"> </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script  language="javascript" src="../../libreria/js/alertLogins.js"> </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  </body>
</html>