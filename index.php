<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("Location: sistema.php");
    }

    

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.2/css/bootstrap.min.css" rel="stylesheet" />
    <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
    <title>Login</title>
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <br>
    <form action="validar_usuario.php" method="POST">
        <input type="text" title="Nombre" name="usuario" placeholder="Nombre de Usuario"  required>
        <div class="mensaje"><?php //echo $mensaje  ?></div>
        <input type="password" title="clave" name="clave" placeholder="Password"  required><hr>
        <button type="submit" name="submit">Iniciar</button>
    </form>




<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
</body>

</html>