<?php

include("conexion.php");
$con=conectar();

$idpaciente=$_GET['id'];

$sql="DELETE FROM consulta  WHERE nombre_paciente='$nombre_paciente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: consultas.php");
    }
?>
