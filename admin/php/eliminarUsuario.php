<?php 
    include("conexion.php");
	$id=$_POST['id'];

	$sql="DELETE FROM usuarios WHERE  id='$id'";
	echo $result=mysqli_query($enlace,$sql);

 ?>