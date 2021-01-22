<?php 

if($_SERVER['REQUEST_METHOD']=='POST'){
    include("../php/conexion.php");
    session_start();
    $usuario=$_POST["username"];
    $clave=$_POST["password"];
    $consulta="select * from usuarios where usuario= '$usuario' AND contrasena='$clave'";
    $resultado=mysqli_query($enlace,$consulta);
    $filas=mysqli_num_rows($resultado);
    if($filas>0){
        $_SESSION["usuario"]=$usuario;
        header('Location:../index.php');
    
    }
    else{
        $error = "Ups!, por favor verifica que tus datos sean válidos";
    }
}


require 'index.php';

?>