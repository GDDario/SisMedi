<?php

session_start();

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

        <form method="post">
            <div class="input-field">
                <label for="email">Email</label>
                <input id="email" type="email" required>
            </div>

            <div class="input-field">
                <label for="password">Senha</label>
                <input id="password" type="password" required>
            </div>

            <div class="stay-connected-field">
                <input id="stay-connected" type="checkbox" required>
                <label for="stay-connected">Permanecer conectado</label>
            </div>

            <button class="login confirm">Login</button>
            
            <a href="#">Esqueci minha senha</a>
        </form>
    </main>

</body>

</html>