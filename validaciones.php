<?php

    $validaciones = [];

    if(!empty($_POST)){

        if(empty($_POST['nombre'])){
            $validaciones['nombre'] = 'El campo nombre es requerido';
        } else if(strlen($_POST['nombre']) < 3) {
            $validaciones['nombre'] = 'El campo nombre requiere como mínimo 3 caracteres';
        } 
        if(empty($_POST['apellido'])){
            $validaciones['apellido'] = 'El campo apellido es requerido';
        }else if (strlen($_POST['apellido'] )< 3){
            $validaciones['apellido'] = 'El campo apellido es requerido';
        }

        if(empty($_POST['Correo'])){ 
            $validaciones['Correo']= 'El campo correo es requerido';
        }else if(!filter_input(INPUT_POST, 'Correo', FILTER_VALIDATE_EMAIL)){ 
            $validaciones['Correo']='El campo correo requiere un correo válido';
        }
    }
    echo json_encode([
        'respuesta' => count($validaciones)===0,
        'errores'=> $validaciones
    ]);
    
    
    

?>
