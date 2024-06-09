<?php

session_start();

$_SESSION['nome_pagina'] = 'Lista de agendamentos';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de agendamentos - SisMedi</title>

    <link rel="stylesheet" href="../public/css/global.css">
    <link rel="stylesheet" href="../public/css/pagina-autenticada.css">
    <link rel="stylesheet" href="../public/css/menu-lateral.css">
    <link rel="stylesheet" href="../public/css/cabecalho.css">
    <link rel="stylesheet" href="../public/css/tabelas.css">
    <link rel="stylesheet" href="../public/css/lista-agendamentos.css">
</head>

<body>
    <div class="pagina">
        <?php include "../public/menu-lateral.php" ?>

        <div class="coluna-dupla">
            <?php include "../public/cabecalho.php" ?>

            <!-- O conteúdo da página deve vir aqui -->
            <section class="conteudo">

                <div class="container-tabela">
                    <div class="filtro">
                        <input type="text" />
                        <input type="text" />
                        <button class="confirmar">Filtrar</button>
                        <button class="cancelar">Limpar</button>
                    </div>

                    <table class="tabela-1">
                        <thead>
                            <tr>
                                <td>ID</td>
                                <td>Paciente</td>
                                <td>Médico</td>
                                <td>Tipo</td>
                                <td>Status</td>
                                <td>Data</td>
                                <td>Hora</td>
                                <td>Obsevação</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                            </tr>
                            <tr>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                            </tr>
                            <tr>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                            </tr>
                            <tr>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                                <td>placeholder</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>

    </div>
</body>

</html>