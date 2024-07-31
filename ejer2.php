<?php
$precioCamisa = 60;
echo "Ingese el número de camisas compradas";
$númeroCamisas = readline();
$totalCompra = $precioCamisa * $númeroCamisas;
echo "El total de la compra sin descuento es: $totalCompra";
if ($númeroCamisas >=3){
    $descuento = $totalCompra * 0.20;
}else {
    $descuento = $totalCompra * 0.10;
}
echo "El descuento aplicado es $descuento";
$pagoTotal= $totalCompra - $descuento;
echo "El total a pagar con descuento incluido es: $pagoTotal";