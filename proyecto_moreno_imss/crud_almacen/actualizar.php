<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM almacen WHERE nombre='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="nombre" value="<?php echo $row['nombre']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="encargado" placeholder="Encargado" value="<?php echo $row['encargado']  ?>">
                                <input type="text" class="form-control mb-3" name="nombre_medicamento" placeholder="Nombre del medicamento" value="<?php echo $row['nombre_medicamento']  ?>">
                                <input type="text" class="form-control mb-3" name="fecha_caducidad" placeholder="Fecha de caducidad" value="<?php echo $row['fecha_caducidad']  ?>">
                                <input type="text" class="form-control mb-3" name="ml_medicamento" placeholder="Mililitros del medicamento" value="<?php echo $row['ml_medicamento']  ?>">
                                <input type="text" class="form-control mb-3" name="precio" placeholder="Precio" value="<?php echo $row['precio']  ?>">
                                <input type="text" class="form-control mb-3" name="categoria" placeholder="Categoria" value="<?php echo $row['categoria']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>