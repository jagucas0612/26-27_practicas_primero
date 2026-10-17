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
        "TEXTO"=>"Ejercicio 7"
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 7", $barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo()
{

    echo "Fecha actual (d/m/Y): " . date('d/m/Y') . "<br>";
    echo "Fecha actual: " . date('d, m, Y, D') . "<br>";
    echo "Hora actual: " . date('H:i:s' );

?>
    

<?php
}