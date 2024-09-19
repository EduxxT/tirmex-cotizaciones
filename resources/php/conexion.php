<?php 


$server =  "localhost";
$username = "root";
$password = "";
$dbname = "tirmex-cotizaciones";

$conexion = new mysqli($server, $username, $password, $dbname);

if ($conexion->connect_error) {
    die("Conexion fallida" .  $conexion->connect_error);
} else {
    echo  "";   
}

?>