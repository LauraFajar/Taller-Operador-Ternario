<?php
echo "Ingrese el largo del terreno";
$largo= readline();

echo "Ingrese el ancho del terreno";
$ancho= readline();

$área= ($largo * $ancho);
if ($área >= 100){
    echo "El terreno es adecuado para cultivos extensivos";
}else{
    echo "El terreno es más adecuado para cultivos de jardín o huerto";
}