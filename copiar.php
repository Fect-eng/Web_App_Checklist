<?php

//include 'conexion.php';

$nombre = $_REQUEST["usr_nombre"]; 
$apepat = $_REQUEST["usr_apepat"];
$codigo = $_REQUEST["code_cocina"];


$con = mysqli_connect("localhost","id19884479_kss_dbapp","SUvw#7Qq\LYOL*s3","id19884479_kassandra_db") or die ("Sin Conexion"); 

$sql = "insert into login_cocina (usr_nombre, usr_apepat, code_cocina) values ('$nombre', '$apepat', '$codigo' )";
$resul = mysqli_query($con, $sql); 
echo $resul; 
mysqli_close($con); 


//Funcional Ok Very Good
//putero putewro
?>