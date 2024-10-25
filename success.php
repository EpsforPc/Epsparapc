<?php
session_start();

// Verificar si el usuario esta autenticado
if (!isset($_SESSION['user'])) {
    header("Location: index.php"); // Redirigir al usuario al inicio de sesi�n si no est� autenticado
    exit();
}
?>
