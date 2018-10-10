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
    <title>Sistema</title>
</head>
<body>

    <h1>Todo el sistema</h1>
    <p>Página Principal del Sistema</p>
    <a href="segunda.php">Segunda</a>

    
</body>
</html>