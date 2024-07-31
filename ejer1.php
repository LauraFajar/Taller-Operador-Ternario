<?php
echo "Ingrese su edad  ";
$edad=readline();
if ($edad>=18 ){
    echo"¿ tienes licencia de conducir?  ";
    $respuesta=readline();

}else{
    echo"no puedes conducir ";
}
if($respuesta="si"){
    echo"puedes conducir ";
}else{
    echo"debes obtener una licencia de conducir primero";
}

