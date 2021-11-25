<?php 
    namespace compra_funciones;
    function compras( $valor, $iva, $descuento){
        $valor_iva =0;
        $valor_descuento = 0;
        $valor_compra = 0;
        if($iva > 0){
        $valor_compra = ($iva/100)*$valor;
        echo "El valor con iva es: ".$valor;
        }
        else if($descuento >0){
        $valor_descuento = ($valor*$descuento)-$descuento;
        echo "El valor con descuento es: ".$valor_descuento;
        }
        else if($iva >0 and $descuento >0){
        $valor_compra = ($iva/100)-$valor;
        echo "El valor de la compra con descuento e ive es: ".$valor_compra;
        }else{
        echo "El valor es: ".$valor_compra;
        }
      
        

    }
    namespace notas_funciones;
    function notas($nota_parcial1, $nota_parcial2, $nota_parcial3, $nota_examen, $nota_trabajo_final){
        $nota_final = 0;
        $nota_parcial = 0;
        $nota_parcial = ($nota_parcial1+$nota_parcial2+$nota_parcial3/3)*0.55;
        $nota_final = ($nota_parcial+($nota_examen*(30/100)+ ($nota_trabajo_final*(15/100))))/5;
        echo "La nota final del estudiante es de: ".$nota_final;



    }
    
    
