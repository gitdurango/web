<?php
include("conexion.php");
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$proveedor=$_POST['proveedor'];
$precio=$_POST['precio'];

$sql = "INSERT INTO productos (nombre, descripcion, proveedor, precio ) VALUES ('$nombre', '$descripcion', '$proveedor', '$precio' );";
if(mysqli_query($enlace,$sql)){
    echo "Cliente agregado correctamente";
}else{
    echo "Algo salio mal";
}
myqli_close($enlace);
?>
