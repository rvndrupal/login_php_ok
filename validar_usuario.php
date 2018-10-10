<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">     
    <title>Validar Usuario</title>
</head>
<body>
    
<?php
 include('conexion.php');
   session_start();

   $usuario=$_POST['usuario'];
   $clave=$_POST['clave'];
   

   if($usuario == ""){
    echo "<script>
    alert('Falta el campo Nombre');
    window.location= 'index.php'
    </script>";
    }else if($clave==""){
        echo "<script>
        alert('El password no puede estar vacio');
        window.location= 'index.php'
        </script>";  
    }else if(strlen($usuario) < 4){
        echo "<script>
        alert('El minimo de caracteres en el nombre es de tres');
        window.location= 'index.php'
        </script>";  
    }
    else if(strlen($clave) < 4){
        echo "<script>
        alert('El minimo de caracteres en el password es  de tres');
        window.location= 'index.php'
        </script>";  
    }

    //maximos
    else if(strlen($usuario) > 15){
        echo "<script>
        alert('El maximo de caracteres en el nombre es de Quince');
        window.location= 'index.php'
        </script>";  
    }
    else if(strlen($clave) > 15){
        echo "<script>
        alert('El maximo de caracteres en el password es  de Quince');
        window.location= 'index.php'
        </script>";  
    }

    //solo numeros y letras   
    else if(!preg_match("/^[0-9a-zA-Z]+$/",$usuario)){
        echo "<script>
        alert('El campo nombre solo acepta numeros y letras sin acentos');
        window.location= 'index.php'
        </script>";  
    }

    else if(!preg_match("/^[0-9a-zA-Z]+$/",$clave)){
        echo "<script>
        alert('El campo password solo acepta numeros y letras sin acentos');
        window.location= 'index.php'
        </script>";  
    }
   
   
   
   
   
   else{
       $valido=$con->query("SELECT * FROM $table WHERE usuario= '$usuario' AND clave='$clave' ");

       if ($resultado=mysqli_fetch_array($valido)) {
           $_SESSION['usuario']=$usuario;
           header("Location: sistema.php");
       } else {
        echo "<script>
        alert('Usuario no encontrado favor de validar de nuevo');
        window.location= 'index.php'
        </script>"; 
       }
   }


?>


  
</body>
</html>