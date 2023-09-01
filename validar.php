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
header("location: panels/gerente/home.php");
}else
if($filas['rol_id']==3){ 
header("location: panels/cliente1/home.php");
}else
if($filas['rol_id']==4){ 
header("location: panels/cliente2/home.php");
}
else{
    header('location: errors/index_error.php');
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>