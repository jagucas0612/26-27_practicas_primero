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
        "TEXTO"=>"Relacion 2",
        "ENLACE"=>"/aplicacion/relacion2/index.php"
    ],
    [
        "TEXTO"=>">"
    ],
    [
        "TEXTO"=>"Ejercicio 1"
    ]
];

$primerValor = 17.5;
$segundoValor = 379987.24;

// number_format(valor, decimales, separador_decimal, separador_miles).
$primerFormateado = number_format($primerValor, 1, ',', '');
$segundoFormateado = number_format($segundoValor, 2, ',', '.');

// Completar hasta 15 caracteres: ceros a la izquierda en el primero,
// espacios a la izquierda en el segundo.
$primerCampo = str_pad($primerFormateado, 15, '0', STR_PAD_LEFT);
$segundoCampo = str_pad($segundoFormateado, 15, ' ', STR_PAD_LEFT);

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 1", $barra);
cuerpo($primerCampo, $segundoCampo); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo($primerCampo, $segundoCampo)
{
?>
    <pre>el primer valor -<?= htmlspecialchars($primerCampo, ENT_QUOTES, 'UTF-8') ?>-, el segundo valor -<?= htmlspecialchars($segundoCampo, ENT_QUOTES, 'UTF-8') ?>-</pre>
    <p>Los espacios iniciales del segundo campo se conservan dentro de &lt;pre&gt;.</p>

<?php
}