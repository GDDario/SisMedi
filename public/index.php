<?php

session_start();

if (!isset($_SESSION['user'])) {
    echo 'aoba';
    header('Location: paginas/autenticacao/login.php');
    echo 'ariba';
} else {
    echo 'aa lol';
    header('Location ');
}

// $_SESSION['user'] = 'Jhon Doe';

?>
