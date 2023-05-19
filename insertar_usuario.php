<?php

include 'conexion.php';


$usu_nombre=$_POST['usu_nombre'];           //ok
$usu_apellido=$_POST['usu_apellido'];       //ok
$codigo_us=$_POST['codigo_us'];             //ok
$us_password=$_POST['us_password'];         //ok
//$area_laboral=$_POST['area_laboral'];       //ok
$correo_corp=$_POST['correo_corp'];         //ok

$con="INSERT INTO log_usuario values('".$usu_nombre."', '".$usu_apellido."', '".$codigo_us."', '".$us_password."', '".$correo_corp."')";

mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

mysqli_close($conexion);

/**
 * 
 */

?>