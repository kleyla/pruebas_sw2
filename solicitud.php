<?php

function store($datos, $lugar, $persona)
{
    try {
        if (validar($datos)) {
            save($datos);
            if($lugar)
            if($lugar == 'nuevo' ){
                if (validar($lugar)){
                    save($lugar);
                    $lugar_id = $lugar->id;
                }else{
                    throw new Exception('Datos vacios!');
                }
            }else{
                $lugar_id = $lugar;
            }
            if($persona == 'nuevo'){
                if(validar($persona)){
                    save($persona);
                    $persona_id = $persona->id;
                }else{
                    throw new Exception('Datos vacios!');
                }
            }else{
                $persona_id = $persona->id;
            }
            save($datos);
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
