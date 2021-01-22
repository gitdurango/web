<?php 
    include("conexion.php");
	$nombre=$_POST['nombre'];
	$id=$_POST['id'];
	

	$sql="UPDATE usuarios set usuario='$nombre'
				where id='$id'";
	echo $result=mysqli_query($enlace,$sql);

 ?>