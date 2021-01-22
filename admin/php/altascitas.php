<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];



$sql = "INSERT INTO citas (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje');";
if(mysqli_query($enlace,$sql)){
    echo "Categoria agregada correctamente";
}else{
    echo "Algo salio mal";
}
myqli_close($enlace);
?>