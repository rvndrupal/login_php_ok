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
    <title>Insert</title>
</head>
<body>
    
<?php
    $usuario=$_POST['usuario_edit'];
    $clave=$_POST['clave_edit'];
    $correo=$_POST['correo_edit'];
    $id=$_POST['id'];

   

    include('conexion.php');
   

    if($con->connect_error){
        die("La conexion fallo". $con->connect_error);
    }

    //$UpdateSql = "UPDATE `crud` SET first_name='$fname', last_name='$lname', gender='$gender', age=$age, email_id='$email' WHERE id=$id";

    $actualizar=$con->query("UPDATE $table SET usuario='$usuario', clave='$clave', correo='$correo' WHERE id=$id");

    if($actualizar)
    {
        echo"<script>
        alert('Actualizado correctamente');
        window.location= 'panel.php'
        </script>";
    }
    else{
        echo "<script>
        alert('No se actualizo');
        window.location= 'crud.php'
        </script>";
    }


?>



</body>
</html>