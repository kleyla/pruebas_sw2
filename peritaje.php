<?php

function store($datos, $testigos, $items, $imagenes)
{
    try {
        if ($datos) {
            save($datos);
            foreach ($testigos as $testigo) {
                if (validar($testigo)) {
                    save($testigo);
                } else {
                    throw new Exception('testigos vacios!');
                }
            }
            foreach ($items as $item) {
                if (validar($item)) {
                    save($item);
                } else {
                    throw new Exception('items vacios!');
                }
            }
            if (validar($imagenes)) {
                foreach ($imagenes as $imagen) {
                    save($imagen);
                }
            } else {
                throw new Exception('imagen vacios!');
            }
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
