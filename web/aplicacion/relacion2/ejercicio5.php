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

$texto = <<<'DATOS'
Etiquetas:
<div>
<h1>
<a href="https://ejemplo.com">
Números:
7
42
2026
Correos:
ana@ejemplo.es
info@centro.org
alumno123@instituto.com
DATOS;

// Cada patrón busca una categoría de elemento.
// Las etiquetas se buscan como texto entre < y >.
// Los números son secuencias de uno o más dígitos.
// El patrón de email es sencillo y apropiado para los ejemplos del ejercicio.
$patrones = [
    'Etiqueta HTML' => '/<[^>\r\n]+>/u',
    'Número' => '/\b\d+\b/u',
    'Correo electrónico' => '/\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}\b/u',
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 1", $barra);
cuerpo($texto, $patrones); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo($texto, $patrones)
{
?>
    <h2>Cadena analizada</h2>
    <pre><?= htmlspecialchars($texto, ENT_QUOTES, 'UTF-8') ?></pre>

    <?php foreach ($patrones as $nombre => $patron): ?>
    <h2><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></h2>
    <ul>
    <?php
    // PREG_OFFSET_CAPTURE devuelve el texto encontrado y su posición en bytes.
    if (preg_match_all($patron, $texto, $coincidencias, PREG_OFFSET_CAPTURE)) {
        foreach ($coincidencias[0] as [$elemento, $posicion]) {
            echo '<li>Posición ' . $posicion . ': '
                . htmlspecialchars($elemento, ENT_QUOTES, 'UTF-8') . '</li>';
        }
    } else {
        echo '<li>No se encontraron coincidencias.</li>';
    }
    ?>
    </ul>
    <?php endforeach; ?>
    <p>Nota: PREG_OFFSET_CAPTURE informa posiciones en bytes, no en caracteres.</p>
    

<?php
}