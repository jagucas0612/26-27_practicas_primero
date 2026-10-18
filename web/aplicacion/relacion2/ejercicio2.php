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

$cadena = "Está la niña en casa";
$longitud = mb_strlen($cadena, 'UTF-8');
$caracteres = [];

for ($i = 0; $i < $longitud; $i++) {
    $caracteres[] = mb_substr($cadena, $i, 1, 'UTF-8');
}

// Formas correctas: mb_substr() trabaja con caracteres UTF-8.
// Estas alternativas pueden fallar con tildes y ñ, porque [] y substr()
// trabajan con bytes en lugar de caracteres. Se dejan comentadas para probar:
// $caracterIncorrecto1 = $cadena[4];
// $caracterIncorrecto2 = substr($cadena, 4, 1);

$invertida = [];
for ($i = 0; $i < $longitud; $i++) {
    // Índices negativos: -1 es el último carácter, -2 el penúltimo, etc.
    $caracter = mb_substr($cadena, -($i + 1), 1, 'UTF-8');
    $invertida[] = ($i % 2 === 0) ? mb_strtoupper($caracter, 'UTF-8') : mb_strtolower($caracter, 'UTF-8');
}

$partes = explode('a', $cadena);
$posicionNina = mb_strpos($cadena, 'niña', 0, 'UTF-8');
$nuevaCadena = $cadena;
if ($posicionNina !== false) {
    // Tras "niña" hay un espacio; sustituimos "niña " por "niña/mujer ".
    $nuevaCadena = mb_substr($cadena, 0, $posicionNina, 'UTF-8')
        . 'niña/mujer '
        . mb_substr($cadena, $posicionNina + mb_strlen('niña ', 'UTF-8'), null, 'UTF-8');
}

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 1", $barra);
cuerpo($cadena, $caracteres, $invertida, $partes, $nuevaCadena); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo($cadena, $caracteres, $invertida, $partes, $nuevaCadena)
{
?>
    <h2>Cadena original</h2>
    <p><?= htmlspecialchars($cadena, ENT_QUOTES, 'UTF-8') ?></p>

    <h2>Cada carácter en una línea, con espacios según su posición</h2>
    <pre><?php foreach ($caracteres as $i => $caracter) {
        echo str_repeat(' ', $i) . htmlspecialchars($caracter, ENT_QUOTES, 'UTF-8') . "\n";
    } ?></pre>

    <h2>Cadena en orden inverso</h2>
    <p>Se usa mb_substr() con índices negativos; los índices pares (desde 0) van en mayúscula y los impares en minúscula.</p>
    <pre><?php foreach ($invertida as $i => $caracter) {
        echo str_repeat(' ', $i) . htmlspecialchars($caracter, ENT_QUOTES, 'UTF-8') . "\n";
    } ?></pre>

    <h2>Separar usando el carácter «a»</h2>
    <pre><?php foreach ($partes as $parte) {
        echo htmlspecialchars($parte, ENT_QUOTES, 'UTF-8') . "\n";
    } ?></pre>

    <h2>Reemplazar el espacio que sigue a «niña»</h2>
    <p><?= htmlspecialchars($nuevaCadena, ENT_QUOTES, 'UTF-8') ?></p>

<?php
}