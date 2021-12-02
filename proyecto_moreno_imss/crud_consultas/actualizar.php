<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM consultas WHERE nombre_paciente='$id'";
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
                    
                                <input type="hidden" name="nombre_paciente" value="<?php echo $row['nombre_paciente']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="numero_consulta" placeholder="Numero de la consulta" value="<?php echo $row['numero_consulta']  ?>">
                                <input type="text" class="form-control mb-3" name="tipo_consulta" placeholder="Tipo de consulta" value="<?php echo $row['tipo_consulta']  ?>">
                                <input type="text" class="form-control mb-3" name="lugar" placeholder="Lugar de la consulta" value="<?php echo $row['lugar']  ?>">
                                <input type="text" class="form-control mb-3" name="hora" placeholder="Hora de la consulta" value="<?php echo $row['hora']  ?>">
                                <input type="text" class="form-control mb-3" name="doctor_encargado" placeholder="Doctor encargado" value="<?php echo $row['doctor_encargado']  ?>">
                                <input type="text" class="form-control mb-3" name="medicamentos_dados" placeholder="Medicamentos dados" value="<?php echo $row['medicamentos_dados']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>