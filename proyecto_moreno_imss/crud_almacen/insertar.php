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


$sql="INSERT INTO almacen VALUES('$nombre','$encargado','$nombre_medicamento','$fecha_caducidad','$ml_medicamento','$precio','$categoria')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: almacen.php");
    
}else {
}
?>