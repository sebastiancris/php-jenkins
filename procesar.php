<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validar los campos
    if (empty($username) || empty($password)) {
        echo "Error: Todos los campos son obligatorios.";
    } else {
        echo "¡Registro exitoso! Bienvenido, $username.";
    }
}

?>
