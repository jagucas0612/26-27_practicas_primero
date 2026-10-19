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
    <br>
    <a href="./ejercicio1.php">Ejercicio 1</a><br><br>
    <a href="./ejercicio2.php">Ejercicio 2</a><br><br>
    <a href="./ejercicio3.php">Ejercicio 3</a><br><br>
    <a href="./ejercicio4.php">Ejercicio 4</a><br><br>
    <a href="./ejercicio5.php">Ejercicio 5</a><br><br>
    <a href="./ejercicio6.php">Ejercicio 6</a><br><br>
    <a href="./ejercicio7.php">Ejercicio 7</a><br><br>
<?php
}