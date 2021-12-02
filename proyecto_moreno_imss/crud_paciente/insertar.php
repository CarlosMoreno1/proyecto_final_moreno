<?php
include("conexion.php");
$con=conectar();

$idpaciente=$_POST['idpaciente'];
$nombre=$_POST['nombre'];
$email=$_POST['apellidos'];
$nombre=$_POST['email'];
$nombre=$_POST['edad'];
$numero_seguro_social=$_POST['numero_seguro_social'];
$tipo_de_cita=$_POST['padecimientos'];


$sql="INSERT INTO paciente VALUES('$idpaciente','$nombre','$apellidos','$email','$edad','$numero_seguro_social','$padecimientos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: paciente.php");
    
}else {
}
?>