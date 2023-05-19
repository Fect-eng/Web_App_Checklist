<?php
include('conexion.php');
$usuario=$_POST['codigo_us'];
$password=$_POST['us_password'];

// DB checklist_bd  

$consulta="SELECT*FROM log_usuario where codigo_us='$usuario' and us_password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:home.php");

}else{
    ?>
    <?php
    include("index.html");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
