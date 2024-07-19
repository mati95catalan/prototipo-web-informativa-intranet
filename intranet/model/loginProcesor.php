<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
// Consulta a nuestra base de datos 
    $usuario = mysqli_real_escape_string($db,$_POST['txtUsuario']);
    $contrasena = mysqli_real_escape_string($db,$_POST['txtContrasena']);
    
    $sql = "SELECT id, usuario, contrasena FROM usuarios  WHERE usuario = '$usuario' and contrasena = '$contrasena'";
    $result = mysqli_query($db,$sql);
	
	while($ver=mysqli_fetch_row($result)){
	// arreglo con datos del usuario para guardar el ID
     	    $id = $ver[0];
            $usuario=$ver[1];
            $contrasena=$ver[2];
	}
    $count = mysqli_num_rows($result); 
// si encuentra $myusername y $mypassword, guarda el nombre del usuario y abre administrador

if(empty($usuario)){    
    echo "<body onload='functionLoginInvalido()'>";
}
elseif($usuario==='jsabat'){
    if($count == 1) {
        // $_SESSION['login_user'] guarda el nombre de usuario para poder usarlo en otros archivos php
            $_SESSION['id'] = $id;
            $_SESSION['usuario'] = $usuario; 
            $_SESSION['contrasena'] = $contrasena;
       
            header("location: http://localhost/cesfamsabat/intranet/index.php"); // dominio web https://cesfamsabat.cl/intranet/index.php
      }
      else{  
            $error ="ERROR DE DATOS";
            echo "<body onload='functionLoginInvalido()'>";
      }
      
}
}

    ?>