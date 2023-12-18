<?php
$username=$_POST['username'];
$password=$_POST['password'];
session_start();
$_SESSION['username']=$username;

include ('bd/conexion.php');

$consulta="SELECT*FROM usuarios where username='$username' and password='$password'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['rol_id']==1){ 
    header("location: panels/administrador/home.php");
    
}else
if($filas['rol_id']==2){ 
    header("location: panels/cliente/home.php");

}else{
    header('location: errors/index_error.php');
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>