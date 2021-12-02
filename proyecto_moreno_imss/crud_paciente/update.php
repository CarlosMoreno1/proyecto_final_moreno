<?php

include("conexion.php");
$con=conectar();

$idpaciente=$_POST['idpaciente'];
$nombre=$_POST['nombre'];
$apellidos=$_POST['apellidos'];
$email=$_POST['email'];
$edad=$_POST['edad'];
$numero_seguro_social=$_POST['numero_seguro_social'];
$padecimientos=$_POST['padecimientos'];

$sql="UPDATE paciente SET  idpaciente='$idpaciente',nombre='$nombre',apellidos='$apellidos',email='$email',edad='$edad',numero_seguro_social='$numero_seguro_social',padecimientos='$padecimientos' WHERE idpaciente='$idpaciente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: paciente.php");
    }
?>