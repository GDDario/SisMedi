<?php

include "config.php";

session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: paginas/autenticacao/login.php');
} else {
    $tipoUsuario = $_SESSION['tipo_usuario'];

    $location = match($tipoUsuario) {
        'paciente' => '../paciente/lista-consultas.php',
        'auxiliar' => '../auxiliar/lista-consultas.php',
        'medico' => '../paciente/lista-consultas.php',
    };

    header("Location: $location");
}

// $_SESSION['user'] = 'Jhon Doe';

?>
