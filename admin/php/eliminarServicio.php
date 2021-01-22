<?php 
    include("conexion.php");
	$id=$_POST['id'];

	$sql="DELETE FROM clientes WHERE  Servicio='$id'";
	echo $result=mysqli_query($enlace,$sql);

 ?>