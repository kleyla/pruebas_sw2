<?php

function store($datos, $rol)
{
    try {
        if (validar($datos) && validar($rol)) {           // 1  2
            save($datos);                               // 3
            asignar($rol);                              // 4
        } else {
            throw new Exception('Datos vacios!');
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}

function save($datos)
{
}
function validar($datos)
{
}
function asignar($rol)
{
}
