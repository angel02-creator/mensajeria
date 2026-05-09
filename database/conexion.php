<?php

$host = "ftp-soto.alwaysdata.net";
$usuario = "soto";
$password = "clave1234";
$base_datos = "mensajeria";

$conn = new mysqli($host, $usuario, $password, $base_datos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

?>