<?php
$servername = "mysql.webcindario.com";
$username = "epsparapc";
$password = "epsparapc2205";
$dbname = "users";

// Crear conexi�n
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexi�n
if ($conn->connect_error) {
    die("Conexi�n fallida: " . $conn->connect_error);
}
?>

