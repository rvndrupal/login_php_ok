<?php
 include('conexion.php'); 
 $id=$_GET['id']; 

 $consulta="SELECT * FROM $table where id=$id";
 $ejecutar=$con->query($consulta);
 $r = mysqli_fetch_assoc($ejecutar);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar Usuario</title>
</head>

 <a href="crud.php" class="btn btn-sm btn-primary pull-right">Lista</a>
<body>
    <h1>Editar Usuario</h1>
    <br>
    <form action="actualizar.php" method="POST">
        <input type="text" title="Nombre" name="usuario_edit" placeholder="Nombre de Usuario" value="<?php echo $r['usuario'];  ?>" required>
        <input type="password" title="clave" name="clave_edit" placeholder="Password" value="<?php echo $r['clave'];  ?>" required>
        <input type="email" title="email" name="correo_edit" placeholder="Email" pattern="^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$" value="<?php echo $r['correo'];  ?>"required>
        <input type="hidden" name="id" value="<?php echo $r['id'];  ?>" >
        <button type="submit" name="submit">Editar Cuenta</button>
    </form>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>