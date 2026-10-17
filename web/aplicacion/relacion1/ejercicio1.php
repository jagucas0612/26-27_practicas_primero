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
        "TEXTO"=>"Ejercicio 1"
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 1", $barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo()
{
    $rou = round(4.56);
    echo "Número redondeado hacia arriba: {$rou} <br>";

    $flo = floor(4.56);
    echo "Número redondeado hacia abajo: {$flo} <br>";

    $pow = pow(2,3);
    echo "Potencia de un número: {$pow} <br>";

    $sqr = sqrt(64);
    echo "Raíz cuadrada: {$sqr} <br>";

    $ehx = hexdec(14);
    echo "Entero a hexadecimal: {$ehx}<br>";

    $b48 = base_convert(10,4,8);
    echo "De base 4 a base 8: {$b48}<br>";

    $pi = pi();
    echo "Valor de pi: {$pi} <br>";

    $sin = sin(3);
    echo "Seno: {$sin}";
?>
    
    

<?php
}