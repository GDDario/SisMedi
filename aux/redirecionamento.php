<?php

include "tipos-usuario.php";

function redirecionarUsuarioLogado(int $tipoUsuario) {
    $location = match($tipoUsuario) {
        TipoUsuario::ADMINISTRADOR->value => '../administrador/logs-atividade.php',
        TipoUsuario::MEDICO->value => '../medico/lista-consultas.php',
        TipoUsuario::AUXILIAR->value => '../auxiliar/lista-consultas.php',
        TipoUsuario::PACIENTE->value => '../paciente/lista-consultas.php',
    };

    echo "Location $location";

    header("Location: $location");
}