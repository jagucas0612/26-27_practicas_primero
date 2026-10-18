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

$nombre = "Ana";
$ciudad = "Málaga";
$comillasDobles = "Hola, $nombre. Estás en $ciudad.";
$comillasSimples = 'Las comillas simples no interpretan $nombre ni los saltos \n.';
$heredoc = <<<TEXTO
Esta cadena usa HEREDOC.
Interpreta variables: nombre = $nombre.
También puede contener etiquetas HTML: <strong>texto en negrita</strong>.
Caracteres especiales: ' " á é ñ.
TEXTO;
$nowdoc = <<<'TEXTO'
Esta cadena usa NOWDOC.
No interpreta variables: $nombre.
Las etiquetas HTML se mostrarán como texto: <strong>texto en negrita</strong>.
Caracteres especiales: ' " á é ñ.
TEXTO;

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 1", $barra);
cuerpo($comillasDobles, $comillasSimples, $heredoc, $nowdoc); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo($comillasDobles, $comillasSimples, $heredoc, $nowdoc)
{
?>
    <h2>Comillas dobles</h2>
    <pre><?= htmlspecialchars($comillasDobles, ENT_QUOTES, 'UTF-8') ?></pre>
    <h2>Comillas simples</h2>
    <pre><?= htmlspecialchars($comillasSimples, ENT_QUOTES, 'UTF-8') ?></pre>
    <h2>HEREDOC</h2>
    <pre><?= htmlspecialchars($heredoc, ENT_QUOTES, 'UTF-8') ?></pre>
    <h2>NOWDOC</h2>
    <pre><?= htmlspecialchars($nowdoc, ENT_QUOTES, 'UTF-8') ?></pre>
    <p>Se usa htmlspecialchars() para que las etiquetas HTML se muestren y no se ejecuten.</p>
    

<?php
}