<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];



$sql = "INSERT INTO citas (nombre, email, asunto, mensaje) VALUES ('$nombre', '$email', '$asunto', '$mensaje');";
echo $result=mysqli_query($enlace,$sql);


?>