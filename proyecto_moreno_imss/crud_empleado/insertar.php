<?php
include("conexion.php");
$con=conectar();

$idempleado=$_POST['idempleado'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$ocupacion=$_POST['ocupacion'];
$horario_trabajo=$_POST['horario_trabajo'];
$genero=$_POST['genero'];


$sql="INSERT INTO empleado VALUES('$idempleado','$nombre','$apellidos','$email','$ocupacion','$horario_trabajo','$genero')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>