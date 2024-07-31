<?php

echo "Ingrese la cantidad de artículos comprados";
$respuesta =readline();

echo "Ingrese el precio unitario de cada artículo";
$res2 =readline();
$suma = floatval ($res2);

if ($respuesta >=10){
    $descuento = $suma * 0.1;
} 
echo "El total a pagar luego de aplicar el descuento es: $descuento";