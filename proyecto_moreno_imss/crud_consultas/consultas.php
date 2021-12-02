<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM consultas";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CONSULTAS </title>
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

                                    <input type="text" class="form-control mb-3" name="nombre_paciente" placeholder="Nombre del paciente">
                                    <input type="text" class="form-control mb-3" name="numero_consulta" placeholder="Numero de la consulta">
                                    <input type="text" class="form-control mb-3" name="tipo_consulta" placeholder="Tipo de consulta">
                                    <input type="text" class="form-control mb-3" name="lugar" placeholder="Lugar de la consulta">
                                    <input type="text" class="form-control mb-3" name="hora" placeholder="Hora de la consulta">
                                    <input type="text" class="form-control mb-3" name="doctor_encargado" placeholder="Doctor encargado">
                                    <input type="text" class="form-control mb-3" name="medicamentos_dados" placeholder="Medicamentos dados">

                                    <input type="submit" class="btn btn-primary"><a href="/proyecto_moreno_imss/index.php">Inicio</a></li>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>Nombre del paciente</th>
                                        <th>Numero consulta</th>
                                        <th>Tipo de consulta</th>
                                        <th>Lugar</th>
                                        <th>Hora</th>
                                        <th>Doctor encargado</th>
                                        <th>Medicamentos recetados</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['nombre_paciente']?></th>
                                                <th><?php  echo $row['numero_consulta']?></th>
                                                <th><?php  echo $row['tipo_consulta']?></th>
                                                <th><?php  echo $row['lugar']?></th>
                                                <th><?php  echo $row['hora']?></th>
                                                <th><?php  echo $row['doctor_encargado']?></th>   
                                                <th><?php  echo $row['medicamentos_dados']?></th>   

                                                <th><a href="actualizar.php?id=<?php echo $row['nombre_paciente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['nombre_paciente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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