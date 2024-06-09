<?php

enum TipoUsuario: int {
    case ADMINISTRADOR = 1;
    case MEDICO = 2;
    case AUXILIAR = 3;
    case PACIENTE = 4;
}