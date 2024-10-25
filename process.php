<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['formType'] === 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Validar inicio de sesion
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['user'] = $email;
            header("Location: success.php");
        } else {
            echo "Usuario o contrase&ntilde;a incorrectos";
        }
    } elseif ($_POST['formType'] === 'register') {
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Registrar nuevo usuario
        $sql = "INSERT INTO users (apellido, nombre, email, password) VALUES ('$apellido', '$nombre', '$email', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
