<?php

    include 'conexion.php';
    $usu_nombre=$_POST['codigo_us'];           // codigo_us        usu_nombre
    $usu_apellido=$_POST['us_password'];       // us_password      usu_apellido

    //$usu_usuario="aroncal@gmail.com"; 
    //$usu_password="123456789";

    //$usu_nombre="Prueba1"; 
   // $usu_apellido="Prueba2";
    
    $sentencia=$conexion->prepare("SELECT * FROM log_usuario WHERE codigo_us=? AND us_password=?");
    $sentencia->bind_param('ss',$usu_nombre,$usu_apellido);
    $sentencia->execute();

    $resultado = $sentencia->get_result();
    if ($fila = $resultado->fetch_assoc()) {
        echo json_encode($fila,JSON_UNESCAPED_UNICODE);
    }

    $sentencia->close(); 
    $conexion->close();

    // Codigo Funcional 08_05_2023
?>