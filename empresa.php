<?php

function store($datos)
{
    try {
        if (validar($datos)) {                  // 1
            save($datos);                       // 2
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
