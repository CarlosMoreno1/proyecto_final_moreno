<?php

include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$encargado=$_POST['encargado'];
$nombre_medicamento=$_POST['nombre_medicamento'];
$fecha_caducidad=$_POST['fecha_caducidad'];
$ml_medicamento=$_POST['ml_medicamento'];
$precio=$_POST['precio'];
$categoria=$_POST['categoria'];

$sql="UPDATE almacen SET  nombre='$nombre',encargado='$encargado',nombre_medicamento='$nombre_medicamento',fecha_caducidad='$fecha_caducidad',ml_medicamento='$ml_medicamento',precio='$precio',categoria='$categoria' WHERE nombre='$nombre'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: almacen.php");
    }
?>