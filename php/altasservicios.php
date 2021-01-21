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
$daños=$_POST['Daños'];
$comentarios=$_POST['Comentarios'];
$contraseña=$_POST['Contraseña'];
$descripcion=$_POST['Descripcion'];
$estimado=$_POST['Estimado'];
$anticipo=$_POST['Anticipo'];



$sql = "INSERT INTO clientes (Servicio, Nombre, Fecha, Recibe, Telefono, Equipo, MarcaModelo, Color, Enciende, Cargador, Daños, Comentarios, Contraseña, Descripcion, Estimado, Anticipo ) VALUES ('$servicio', '$nombre', '$fecha', '$recibe', '$telefono', '$equipo', '$marcamodelo', '$color', '$enciende', '$cargador', '$daños', '$comentarios', '$contraseña', '$descripcion', '$estimado', '$anticipo' );";
if(mysqli_query($enlace,$sql)){
    echo "Cliente agregado correctamente";
}else{
    echo "Algo salio mal";
}
myqli_close($enlace);
?>