<?php
require_once "operacion.php";



$nombre="samuel";
$numero=40;
$bolean =false;
$imaginario=12.000999;

echo "la variable nombre es ->$nombre,numero->$numero,boolean es ->$bolean,imaginario es ->$imaginario";

$array =array ('4','5','6','7','7','8','9','0');
echo"<br>";


$operaciones=new operaciones();
echo "Resultado de suma ->".$operaciones->suma(5,9);


if($operaciones ->suma(3,3)<0){
    echo "el numero es menora 0";

    } else{

        echo "El numero es mayor";








    }
    $respuesta =$operaciones ->suma(3,3)? "tiene datos ":"ocurrio un error ";
    echo $respuesta;










?>