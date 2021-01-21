<?php 
session_start();
error_reporting(0);
$sessionactiva=$_SESSION["usuario"];
if($sessionactiva==null || $sessionactiva=''){
     echo "No eres administrador";
     
}
session_destroy();
header('Location:../index.html');
die();

?>