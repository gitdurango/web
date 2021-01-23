<?php
include("conexion.php");
$servicio=$_POST['Servicio'];
$nombre=$_POST['Nombre'];
$fecha=$_POST['Fecha'];
$recibe=$_POST['Recibe'];
$telefono=$_POST['Telefono'];
$equipo=$_POST['Equipo'];
$marcamodelo=$_POST['MarcaModelo'];
$color=$_POST['Color'];
$enciende=$_POST['Enciende'];
$cargador=$_POST['Cargador'];
$danos=$_POST['Danos'];
$comentarios=$_POST['Comentarios'];
$contrasena=$_POST['Contrasena'];
$descripcion=$_POST['Descripcion'];
$estimado=$_POST['Estimado'];
$anticipo=$_POST['Anticipo'];
$estado = 1;





$sql = "INSERT INTO clientes (Nombre, Fecha, Recibe, Telefono, Equipo, MarcaModelo, Color, Enciende, Cargador, Danos, Comentarios, Contrasena, Descripcion, Estimado, Anticipo, Estado ) VALUES ('$nombre', '$fecha', '$recibe', '$telefono', '$equipo', '$marcamodelo', '$color', '$enciende', '$cargador', '$danos', '$comentarios', '$contrasena', '$descripcion', '$estimado', '$anticipo', $estado );";
if(mysqli_query($enlace,$sql)){
    echo "Cliente agregado correctamente";
}else{
    echo "Algo salio mal";
}
myqli_close($enlace);
?>