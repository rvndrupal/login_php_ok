<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Crud Login</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">                 

                    <a href="registrar.php" class="btn btn-sm btn-primary pull-right">Nuevo</a>
                   
                </div>

                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>

                        <?php
                         include('conexion.php');                        
                         $consulta="SELECT * FROM $table";
                         $registros=$con->query($consulta);                         
                        ?>

                        <tbody>
                        <?php   
                        while ($reg=mysqli_fetch_array($registros)) {
                            
                            echo'
                            <tr>
                                <td> '.$reg["id"].' </td>
                                <td> '.$reg["usuario"].'</td>
                                <td>'.$reg["correo"].'</td>                              
                                <td width="10px">                                
                                <a href="editar.php?id='.$reg["id"].'" class="btn btn-sm btn-primary">Editar</a>                           
                                </td>
                                <td width="10px">
                                <a href="delete.php?id='.$reg["id"].'" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>

                            </tr>
                            ';
                        }
                      
                        ?>      
                          
                        </tbody>
                    </table>

                   
                   
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>