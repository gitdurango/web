<?php
    $user="Admin";
	$user_db="gitecnologias";
	$server="localhost";
	$password="GITecnologias4586";

	$enlace = mysqli_connect($server, $user, $password, $user_db);

	if (!$enlace) {
	    echo "Error: No se pudo conectar a MySQL.".PHP_EOL;
	    echo "errno de depuración: ".mysqli_connect_errno().PHP_EOL;
	    echo "error de depuración: ".mysqli_connect_error() . PHP_EOL;
	    exit;
	}

	?>