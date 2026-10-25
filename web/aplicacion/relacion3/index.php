<?php
include_once(dirname(__FILE__) . "/../../cabecera.php");
require_once __DIR__ . '/libreria.php';

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
    <h2>Relación de Ejercicios 3</h2><br>

    <h3>Función 1</h3>
    
    <?php  
        $vector=array();
        $numero=10;
        cuentaVeces($vector,"1osicion",7,$numero);
        echo $numero;
    ?>

    <h3>Función 2</h3>

    <p>Cadena aleatoria de 7 carácteres</p>
    <?php echo generarCadena(7) ?>

    <h3>Función 3</h3>

    <p>Suma de 1, 5  y 7</p>
    <?php echo operaciones(1,1,5,7) ?>
    <p>Resta de 10, 5 y 6</p>
    <?php echo operaciones(2,10,5,6) ?>
    <p>Multiplicación de 9, 2 y 7</p>
    <?php echo operaciones(3,9,2,7) ?>
    <p>Suma y Resta pares e impares</p>
    <?php echo operaciones(5,10,3,5,2)?>

    <h3>Función 4</h3>

    <p>Los tres parámetros</p>
    <?php
        $valor = 7;
        echo "Funcion: " . devuelve($valor,12,8) . "<br>";
        echo "Valor: " . $valor;
    ?>
    <p>El primer parámetro unicamente</p>
    <?php
        $valor = 7;
        echo "Funcion: " . devuelve($valor) . "<br>";
        echo "Valor: " . $valor;
    ?>
    <p>El primer y segundo parámetro</p>
    <?php
        $valor = 7;
        echo "Funcion: " . devuelve($valor,12) . "<br>";
        echo "Valor: " . $valor;
    ?>
    <p>El primer y tercer parámetro</p>
    <?php
        $valor = 7;
        echo "Funcion: " . devuelve($valor,num3:8) . "<br>";
        echo "Valor: " . $valor;
    ?>

    <h3>Función 5</h3>

    <?php 
        echo "Suma: " . hacerOperacion("suma", 5, 3) . "<br>";
        echo "Resta: " . hacerOperacion("resta", 5, 3) . "<br>";
        echo "Multiplicacion: " . hacerOperacion("multiplicacion", 5, 3) . "<br>";

        echo hacerOperacion("division", 5, 3);
    ?>

    <h3>Función 6</h3>

    <p>Funciones Flecha</p>
    <?php 
        echo AFuncion(1, 2, fn($a, $b) => $a + $b) . "<br>";

        echo AFuncion(5, 3, fn($a, $b) => $a - $b) . "<br>";

        echo AFuncion(4, 6, fn($a, $b) => $a * $b);
    ?>

    <p>Funciones anonimas</p>
    <?php 
        $suma = function($a, $b) {
            return $a + $b;
        };

        $resta = function($a, $b) {
            return $a - $b;
        };

        $multiplicacion = function($a, $b) {
            return $a * $b;
        };

        echo AFuncion(1, 2, $suma) . "<br>";

        echo AFuncion(5, 3, $resta) . "<br>";

        echo AFuncion(4, 6, $multiplicacion);

    ?>

    <h3>Función 7</h3>
    <p>Ordenar array</p>
    <?php  
        $palabras = ["sol", "ordenador", "casa", "programacion", "mar"];

        $resultado = ordenar($palabras);

        echo "Sin ordenar: ";
        print_r($palabras);
        echo "<br>";

        echo "Ordenado: ";
        print_r($resultado);
    ?>

<?php
}