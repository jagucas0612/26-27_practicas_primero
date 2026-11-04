<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");

//controlador
require_once __DIR__ . "/../../scripts/clases/ClaseMisPropiedades.php";
require_once __DIR__ . "/../../scripts/clases/EstadoCivil.php";
require_once __DIR__ . "/../../scripts/clases/Flauta.php";
require_once __DIR__ . "/../../scripts/clases/IFabricable.php";
require_once __DIR__ . "/../../scripts/clases/InstrumentoBase.php";
require_once __DIR__ . "/../../scripts/clases/InstrumentoViento.php";
require_once __DIR__ . "/../../scripts/clases/Persona.php";
require_once __DIR__ . "/../../scripts/clases/SerieFibonacci.php";

// EJERCICIO 1 Y 3: Instrumento de viento

$instrumento = new InstrumentoViento("madera", 15);

$sonido = $instrumento->sonido();

$afinacion = $instrumento->afinar();

$instrumento->envejecer();


// EJERCICIO 4: Flauta

$flauta = Flauta::CrearDesdeArray([
    "material" => "metal",
    "edad" => 20
]);

$fabricacion = $flauta->metodoFabricacion();

$reciclado = $flauta->metodoReciclado();

// Clonamos la flauta

$flautaClonada = clone $flauta;


// EJERCICIO 5: EstadoCivil y Persona

$estados = EstadoCivil::casos();

$estadoAleatorio = $estados[array_rand($estados)];

$persona = Persona::registrarPersona(
    "Carlos",
    "15/05/2005",
    "Carrera 12",
    "Antequera",
    $estadoAleatorio
);


// EJERCICIO 6: Fibonacci

$serie = new SerieFibonacci(10);

$numeros = [];

foreach ($serie as $numero) {
    $numeros[] = $numero;
}

$numerosGenerador = [];

foreach (SerieFibonacci::fFibonacci(10) as $numero) {
    $numerosGenerador[] = $numero;
}


// EJERCICIO 7: Propiedades dinámicas

$objeto = new ClaseMisPropiedades();

$objeto->propPublica = "publica";

$objeto->propiedad1 = 25;

$objeto->propiedad2 = "cadena de texto";


$barra=[
    [
        "TEXTO"=>"Inicio",
        "ENLACE"=>"/index.php",
    ],
    [
        "TEXTO"=>">"
    ],
    [
        "TEXTO"=>"Relacion 4",
        "ENLACE"=>"/aplicacion/relacion4/index.php"
    ]
];

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("2DAW APLICACION", $barra);
cuerpo($instrumento, $sonido, $afinacion, $flauta, $fabricacion,
        $reciclado, $flautaClonada, $persona, $estados, $numeros,
        $numerosGenerador, $objeto); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo($instrumento, $sonido, $afinacion, $flauta, $fabricacion,
        $reciclado, $flautaClonada, $persona, $estados, $numeros,
        $numerosGenerador, $objeto)
{
?>
    <h2>Relación de Ejercicios 4</h2><br>

    <!-- EJERCICIO 1 Y 3 -->

<div class="apartado">

    <h2>Ejercicio 1 y 3: Instrumento de viento</h2>

    <p>
        <?php echo $instrumento; ?>
    </p>

    <p>
        Sonido: <?php echo $sonido; ?>
    </p>

    <p>
        Afinación: <?php echo $afinacion; ?>
    </p>

</div>


<!-- EJERCICIO 4 -->

<div class="apartado">

    <h2>Ejercicio 4: Flauta</h2>

    <p>
        <?php echo $flauta; ?>
    </p>

    <p>
        Fabricación: <?php echo $fabricacion; ?>
    </p>

    <p>
        Reciclado: <?php echo $reciclado; ?>
    </p>

    <h3>Flauta clonada</h3>

    <p>
        <?php echo $flautaClonada; ?>
    </p>

</div>


<!-- EJERCICIO 5 -->

<div class="apartado">

    <h2>Ejercicio 5: Estado civil y Persona</h2>

    <p>
        <?php echo $persona->toString(); ?>
    </p>

    <h3>Estados civiles disponibles</h3>

    <?php foreach ($estados as $estado): ?>

        <p>
            <?php echo $estado->descripcion(); ?>
            -
            <?php echo $estado->valor(); ?>
        </p>

    <?php endforeach; ?>

</div>


<!-- EJERCICIO 6 -->

<div class="apartado">

    <h2>Ejercicio 6: Serie Fibonacci</h2>

    <p>Utilizando Iterator:</p>

    <?php

    foreach ($numeros as $numero) {
        echo $numero . " ";
    }

    ?>

    <p>Utilizando Generador:</p>

    <?php

    foreach ($numerosGenerador as $numero) {
        echo $numero . " ";
    }

    ?>

</div>


<!-- EJERCICIO 7 -->

<div class="apartado">

    <h2>Ejercicio 7: ClaseMisPropiedades</h2>

    <p>
        Propiedad 1:
        <?php echo $objeto->propiedad1; ?>
    </p>

    <p>
        Propiedad 2:
        <?php echo $objeto->propiedad2; ?>
    </p>

    <h3>Recorriendo el objeto con foreach</h3>

    <?php foreach ($objeto as $clave => $valor): ?>

        <p>
            <?php echo $clave . " = " . $valor; ?>
        </p>

    <?php endforeach; ?>

</div>

<?php
}