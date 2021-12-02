<?php

include("conexion.php");
$con=conectar();

$idpaciente=$_GET['id'];

$sql="DELETE FROM paciente  WHERE idpaciente='$idpaciente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paciente.php");
    }
?>
