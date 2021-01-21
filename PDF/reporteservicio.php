<?php 

    $reporte = array();
    $mysqli = new mysqli("localhost","carlos","i4ywiBKkMdv2cuxO","gitecnologias");
    $mysqli -> set_charset('utf8');
    $statement = $mysqli->prepare("SELECT * FROM clientes ");
    $statement -> execute();
    $resultado = $statement ->get_result();
    while($row = $resultado->fetch_assoc()) $reporte[] = $row;
    $mysqli -> close();

?>