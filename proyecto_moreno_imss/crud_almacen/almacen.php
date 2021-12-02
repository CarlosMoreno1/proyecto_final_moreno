<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM almacen";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ALMACEN </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre">
                                    <input type="text" class="form-control mb-3" name="encargado" placeholder="Encargado">
                                    <input type="text" class="form-control mb-3" name="nombre_medicamento" placeholder="Nombre del medicamento">
                                    <input type="text" class="form-control mb-3" name="fecha_caducidad" placeholder="Fecha de caducidad">
                                    <input type="text" class="form-control mb-3" name="ml_medicamento" placeholder="Mililitros del medicamento">
                                    <input type="text" class="form-control mb-3" name="precio" placeholder="Precio">
                                    <input type="text" class="form-control mb-3" name="categoria" placeholder="Categoria">

                                    <input type="submit" class="btn btn-primary"><a href="/proyecto_moreno_imss/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Encargado</th>
                                        <th>Nombre del medicamento</th>
                                        <th>Mililitros del medicamento</th>
                                        <th>Precio</th>
                                        <th>Categoria</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['encargado']?></th>
                                                <th><?php  echo $row['nombre_medicamento']?></th>
                                                <th><?php  echo $row['fecha_caducidad']?></th>
                                                <th><?php  echo $row['ml_medicamento']?></th>
                                                <th><?php  echo $row['precio']?></th>  
                                                <th><?php  echo $row['categoria']?></th>         
                                                <th><a href="actualizar.php?id=<?php echo $row['nombre'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['nombre'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>