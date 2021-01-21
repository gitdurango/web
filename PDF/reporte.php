<?php 

    $reporte = array();
    $mysqli = new mysqli("localhost","Admin","GITecnologias4586","gitecnologias");
    $mysqli -> set_charset('utf8');
    $statement = $mysqli->prepare("SELECT * FROM productos ");
    $statement -> execute();
    $resultado = $statement ->get_result();
    while($row = $resultado->fetch_assoc()) $reporte[] = $row;
    $mysqli -> close();

?>