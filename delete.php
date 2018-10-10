<?php
     include('conexion.php'); 
     $id=$_GET['id']; 
     $borrar="DELETE FROM $table where id=$id";
     $ejecutar=$con->query($borrar);
     header('Location: crud.php');

?>