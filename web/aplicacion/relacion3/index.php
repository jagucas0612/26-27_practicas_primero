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
        "TEXTO"=>"Relacion 3",
        "ENLACE"=>"/aplicacion/relacion3/index.php"
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("2DAW APLICACION", $barra);
cuerpo(); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo()
{
?>
    <h2>Relación de Ejercicios 3</h2>
    <br><br>
    <h3>Función 1</h3>

    <h3>Función 2</h3>
    
    <h3>Función 3</h3>

    <h3>Función 4</h3>

    <h3>Función 5</h3>

    <h3>Función 6</h3>

    <h3>Función 7</h3>
<?php
}