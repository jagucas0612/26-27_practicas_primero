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
        "TEXTO"=>"Pruebas",
        "ENLACE"=>"/aplicacion/pruebas/index.php"
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
    <br>
    Elemento de pruebas
    <br><br>
    <a href="./basicas.php">Funcionamiento básico</a>
    <a href="./pasopar.php">Comunicación Controlador-Vista</a>
    <a href="./array.php">Arrays</a>
    <a href="./cadenas.php">Cadenas</a>
    <a href="./expresiones_regulares.php">Expresiones regulares</a>
    <a href="./index_funciones.php">Funciones</a>
<?php
}
