<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
//controlador

$barra=[
    [
        "TEXTO"=>"Inicio",
        "ENLACE"=>"/index.php",
    ],
    [
        "TEXTO"=>">"
    ],
    [
        "TEXTO"=>"Relacion 1",
        "ENLACE"=>"/aplicacion/relacion1/index.php"
    ],
    [
        "TEXTO"=>">"
    ],
    [
        "TEXTO"=>"Ejercicio 3"
    ]
];

$array1 = array();
$array1[1] = true;
$array1[16] = 16;
$array1[54] = 3.3;
$array1[55] = 34;
$array1["uno"] = "cadena";
$array1["dos"] = true;
$array1["tres"] = 1.345;
$array1["ultima"] = [1,34,"nueva"];

$array2 = array(
    1=>"true",
    16=>16,
    54=>3.3,
    55=>34,
    "uno"=>"cadena",
    "dos"=>true,
    "tres"=>1.345,
    "ultima"=>[1,34,"nueva"]
);

$array3 = [
    1=>"true",
    16=>16,
    54=>3.3,
    55=>34,
    "uno"=>"cadena",
    "dos"=>true,
    "tres"=>1.345,
    "ultima"=>[1,34,"nueva"]
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 3", $barra);
cuerpo($array1,$array2,$array3); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo($array1,$array2,$array3)
{
    foreach ($array1 as $clave => $valor) {
        echo "{$clave}: {$valor} <br>";
    }

    foreach ($array2 as $clave => $valor) {
        echo "{$clave}: {$valor} <br>";
    }

    foreach ($array3 as $clave => $valor) {
        echo "{$clave}: {$valor} <br>";
    }

?>
    

<?php
}