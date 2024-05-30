<?php

session_start();

include "../../config.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SisMedi</title>

    <link rel="stylesheet" href="../../css/global.css">
    <link rel="stylesheet" href="../../css/login.css">
</head>

<body>

    <main>
        <img src="../../img/logo-sismed.png" class="logo" />

        <form method="post" action="../autenticacao/../../../aux/fazer-login.php">
            <div class="input-field">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" required>
            </div>

            <div class="input-field">
                <label for="senha">Senha</label>
                <input id="senha" name="senha" type="password" required>
            </div>

            <div class="stay-connected-field">
                <input id="stay-connected" type="checkbox" name="stay-connected">
                <label for="stay-connected">Permanecer conectado</label>
            </div>

            <button class="login confirm">Login</button>

            <a href="#">Esqueci minha senha</a>
        </form>
    </main>

</body>

</html>