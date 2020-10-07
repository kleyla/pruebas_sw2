<?php

function store($datos)
{
    try {
        if (validar($datos)) {
            save($datos);
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
