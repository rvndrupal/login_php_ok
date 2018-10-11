<?php
     session_start();
     if(isset($_SESSION['usuario'])){
         echo"Inicio Sesión correctamente ";
         echo"<a href='cerrar.php'>Cerrar Sesión</a>";
         
     }else{
         header("Location: index.php");
     }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Alta Usuarios</title>
</head>
<body>
    
<?php
   

    $usuario=$_POST['usuario'];
    $clave=$_POST['clave'];
    $correo=$_POST['correo'];
    $rol=$_POST['rol'];

    

    include('conexion.php');
   

    if($con->connect_error){
        die("La conexion fallo". $con->connect_error);
    }

    $buscar=$con->query("SELECT * FROM $table WHERE usuario = '$usuario'");


    

    if($buscar->num_rows == 1){
        
        echo "<script>
        alert('El nombre de usuario ya Existe');
        window.location= 'registrar.php'
        </script>";
    }else{

        //$encriptado=hash("SHA256",$clave);

      $insertar="Insert into $table values ('','$usuario','$clave','$correo','$rol')";

      if($con->query($insertar))
      {
        echo "<script>
        alert('Dato insertado Correctamente');
        window.location= 'panel.php'
        </script>";
      }else{
          echo"No se inserto";
      }
    }


?>



</body>
</html>