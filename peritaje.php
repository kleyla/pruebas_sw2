<?php

function store($datos, $testigos, $items, $imagenes)
{
    try {
        if ($datos) {                               // 1
            save($datos);                           // 2
            foreach ($testigos as $testigo) {       // 3
                if (validar($testigo)) {            // 4
                    save($testigo);                 // 5
                } else {
                    throw new Exception('testigos vacios!');
                }
            }
            foreach ($items as $item) {             // 6
                if (validar($item)) {               // 7
                    save($item);                    // 8
                } else {
                    throw new Exception('items vacios!');
                }
            }
            if (validar($imagenes)) {               // 9
                foreach ($imagenes as $imagen) {    // 10
                    $imagen_ia = analisis_ia($imagen);  // 11
                    save($imagen_ia);                  // 12
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
function analisis_ia($datos)
{
}
