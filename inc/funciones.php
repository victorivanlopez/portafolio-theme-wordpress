<?php 

function validarValues($arg) {
    foreach ($arg as $clave => $valor) {
        if (!empty($valor)) {
            return true;
        };
    };
};