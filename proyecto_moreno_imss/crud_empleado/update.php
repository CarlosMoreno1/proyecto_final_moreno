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


$sql="UPDATE empleado SET  idempleado='$idempleado',nombre='$nombre',apellidos='$apellidos',email='$email',ocupacion='$ocupacion',horario_trabajo='$horario_trabajo',genero='$genero' WHERE idempleado='$idempleado'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>