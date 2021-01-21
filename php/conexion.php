<?php
    $user="carlos";
	$user_db="gitecnologias";
	$server="localhost";
	$password="i4ywiBKkMdv2cuxO";

	$enlace = mysqli_connect($server, $user, $password, $user_db);

	if (!$enlace) {
	    echo "Error: No se pudo conectar a MySQL.".PHP_EOL;
	    echo "errno de depuración: ".mysqli_connect_errno().PHP_EOL;
	    echo "error de depuración: ".mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	?>