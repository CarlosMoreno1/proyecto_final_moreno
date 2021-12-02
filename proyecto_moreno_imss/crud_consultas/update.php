<?php

include("conexion.php");
$con=conectar();

$nombre_paciente=$_POST['nombre_paciente'];
$numero_consulta=$_POST['numero_consulta'];
$tipo_consulta=$_POST['tipo_consulta'];
$lugar=$_POST['lugar'];
$hora=$_POST['hora'];
$doctor_encargado=$_POST['doctor_encargado'];
$medicamentos_dados=$_POST['medicamentos_dados'];

$sql="UPDATE consultas SET  nombre_paciente='$nombre_paciente',numero_consulta='$numero_consulta',tipo_consulta='$tipo_consulta',lugar='$lugar',hora='$hora',doctor_encargado='$doctor_encargado',medicamentos_dados='$medicamentos_dados' WHERE nombre_paciente='$nombre_paciente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: consultas.php");
    }
?>