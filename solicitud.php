<?php

function store($datos, $lugar, $persona)
{
    try {
        if (validar($datos)) {              // 1
            save($datos);                   // 2
            if($lugar == 'nuevo' ){         // 3
                if (validar($lugar)){       //4
                    save($lugar);           // 5
                    $lugar_id = $lugar->id;
                }else{
                    throw new Exception('Datos vacios!');
                }
            }else{
                $lugar_id = $lugar;         // 6
            }
            if($persona == 'nuevo'){        // 7
                if(validar($persona)){      // 8
                    save($persona);         // 9
                    $persona_id = $persona->id;
                }else{
                    throw new Exception('Datos vacios!');
                }
            }else{
                $persona_id = $persona->id;  //10
            }
            save($datos);                       // 11
        } else {
            throw new Exception('Datos vacios!');
        }
    } catch (Exception $e) {
        $e->getMessage();
    }
}
function save($datos){

}
function validar($datos){

}
