<?php 
    include("conexion.php");
	$nombre=$_POST['nombre'];
	$servicio=$_POST['servicio'];
	$equipo=$_POST['equipo'];
	$descripcion=$_POST['descripcion'];
	$estado=$_POST['estado'];

	$sql="UPDATE clientes set Nombre='$nombre',
								Equipo='$equipo',
                                Descripcion='$descripcion',
								Estado='$estado'
				where Servicio='$servicio'";
	echo $result=mysqli_query($enlace,$sql);

 ?>