<?php

include '../public/config.php';

function conexaoMySQL() {
    $serverName = ENV['DB_SERVER_NAME'];
    $username = ENV['DB_USERNAME'];
    $password = ENV['DB_PASSWORD'];
    $database = ENV['DB_NAME'];

    $conexao = mysqli_connect($serverName, $username, $password, $database);

    if (!$conexao) {
        die('Falha na conexão: ' . mysqli_connect_error());
    }

    return $conexao;
}