<?php

$hostname= 'localhost';
$database= 'checklist_bd';      // base de datos
$username= 'root';              // usuario de mysql
$password= '';                  // contraseña de Localhost phpMyadmin

$conexion=new mysqli( $hostname,$username,$password,$database);
//echo "Se Visualiza";
if($conexion->connect_errno){
   
    echo "lo sentimos, el sitio web esta experimentando problemas";
}
   
?>