<?php 
    include("conexion.php");
	$nombre=$_POST['nombre'];
    $password=$_POST['password'];

	$sql="INSERT into usuarios (usuario,contrasena)
								values ('$nombre','$password')";
	echo $result=mysqli_query($enlace,$sql);

 ?>