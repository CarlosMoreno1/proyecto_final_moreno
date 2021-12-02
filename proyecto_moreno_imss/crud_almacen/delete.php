<?php

include("conexion.php");
$con=conectar();

$idpaciente=$_GET['id'];

$sql="DELETE FROM almacen  WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: almacen.php");
    }
?>
