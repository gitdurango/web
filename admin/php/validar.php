<?php 
include("conexion.php");
session_start();
$usuario=$_POST["username"];
$clave=$_POST["password"];
$consulta="select * from usuarios where usuario= '$usuario' AND contrasena='$clave'";
$resultado=mysqli_query($enlace,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas>0){
    $_SESSION["usuario"]=$usuario;
    header('Location:../admin/index.php');

}
else{
    echo "contraseña erronea";
}
mysqli_free_result($resultado);
mysqli_close($enlace);
?>