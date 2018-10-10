<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Cuenta</title>
</head>

<body>
    <h1>Crear Cuenta</h1>
    <br>
    <form action="insertar.php" method="POST">
        <input type="text" title="Nombre" name="usuario" placeholder="Nombre de Usuario" required>
        <input type="password" title="clave" name="clave" placeholder="Password" required>
        <input type="email" title="email" name="correo" placeholder="Email" pattern="^[_a-z0-9-]+(.[_a-z0-9-]+)*@[a-z0-9-]+(.[a-z0-9-]+)*(.[a-z]{2,4})$" required>
        <button type="submit" name="submit">Crear Cuenta</button>
    </form>

</body>

</html>