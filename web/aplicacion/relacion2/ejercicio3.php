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

// a) Array con todos los caracteres permitidos.
$permitidos = array_merge(
    range('a', 'z'),
    range('A', 'Z'),
    range('0', '9')
);
$aleatoriaArray = '';
for ($i = 0; $i < 20; $i++) {
    $aleatoriaArray .= $permitidos[random_int(0, count($permitidos) - 1)];
}

// b) A partir de códigos ASCII, conservando solo letras y números.
$aleatoriaAscii = '';
while (strlen($aleatoriaAscii) < 20) {
    $codigo = random_int(48, 122);
    $esNumero = ($codigo >= 48 && $codigo <= 57);
    $esMayuscula = ($codigo >= 65 && $codigo <= 90);
    $esMinuscula = ($codigo >= 97 && $codigo <= 122);
    if ($esNumero || $esMayuscula || $esMinuscula) {
        $aleatoriaAscii .= chr($codigo);
    }
}

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 1", $barra);
cuerpo($aleatoriaArray, $aleatoriaAscii); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo($aleatoriaArray, $aleatoriaAscii)
{
?>
    <p><strong>a) A partir de un array:</strong> <code><?= htmlspecialchars($aleatoriaArray, ENT_QUOTES, 'UTF-8') ?></code></p>
    <p><strong>b) A partir del código ASCII:</strong> <code><?= htmlspecialchars($aleatoriaAscii, ENT_QUOTES, 'UTF-8') ?></code></p>
    <p>Se utiliza random_int() para seleccionar los caracteres.</p>
    

<?php
}