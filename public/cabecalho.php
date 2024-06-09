<?php

session_start();

$items = [];

?>

<aside class="cabecalho">
    <h1><?= $_SESSION['nome_pagina'] ?></h1>

    <div class="relogio-digital" onload="atualizarRelogio()">
        <div id="data-container">Data: <span id="data-relogio">01/01/2001</span></div>
        <div id="hora-container">Hora: <span id="hora-relogio">00:00</span></div>
    </div>
</aside>

<script>
    document.addEventListener('DOMContentLoaded', atualizarRelogio);

    function atualizarRelogio() {
        const dataRelogio = document.getElementById('data-relogio');
        const horaRelogio = document.getElementById('hora-relogio');

        const data = new Date();
        const dia = pad(data.getDate());
        const mes = pad(data.getMonth() + 1);
        const ano = data.getFullYear();
        const horas = pad(data.getHours());
        const minutos = pad(data.getMinutes());
        const segundos = pad(data.getSeconds());

        dataRelogio.innerHTML = `${dia}/${mes}/${ano}`;
        horaRelogio.innerHTML = `${horas}:${minutos}:${segundos}`;
        setTimeout(atualizarRelogio, 1000);
    }

    function pad(number) {
        if (number < 10) {
            number = "0" + number;
        }

        return number;
    }
</script>