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
        "TEXTO"=>"Relacion 1",
        "ENLACE"=>"/aplicacion/relacion1/index.php"
    ],
    [
        "TEXTO"=>">"
    ],
    [
        "TEXTO"=>"Ejercicio 2"
    ]
];

$arrayDado1 = array();
for($i = 0; $i<6; $i++) {
    $arrayDado1[$i] = mt_rand(1,6);
}

$arrayDado2 = array();
define("N",1000);
$j=0;
while($j<N) {
    $arrayDado2[$j] = (mt_rand()%6)+1;
    $j++;
}

//dibuja la plantilla de la vista
inicioCabecera("APLICACION PRIMER TRIMESTRE");
cabecera();
finCabecera();
inicioCuerpo("Ejercicio 2", $barra);
cuerpo($arrayDado1, $arrayDado2); //llamo a la vista
finCuerpo();
// **********************************************************
//vista
function cabecera()
{}
//vista
function cuerpo($arrayDado1, $arrayDado2)
{
    echo "<h2>Lanzamiento de un dado</h2><br>";

    $lenght = count($arrayDado1);
    for($i=0; $i<$lenght;$i++) {
        echo "Lanzamiento {$i} del dado: {$arrayDado1[$i]} <br>";
    }

    $lenght = count($arrayDado2);
    $num1=0;$num2=0;$num3=0;$num4=0;$num5=0;$num6=0;
    echo "<br>Lanzado el dado {$lenght} veces<br>";
    for($i=0; $i<$lenght;$i++) {
        switch($arrayDado2[$i]) {
            case "1": $num1++;break;
            case "2": $num2++;break;
            case "3": $num3++;break;
            case "4": $num4++;break;
            case "5": $num5++;break;
            case "6": $num6++;break;
        }
    }

    echo "El 1 ha salido {$num1} con un porcenjate " . ($num1/N)*100 . "%<br>";
    echo "El 2 ha salido {$num2} con un porcenjate " . ($num2/N)*100 . "%<br>";
    echo "El 3 ha salido {$num3} con un porcenjate " . ($num3/N)*100 . "%<br>";
    echo "El 4 ha salido {$num4} con un porcenjate " . ($num4/N)*100 . "%<br>";
    echo "El 5 ha salido {$num5} con un porcenjate " . ($num5/N)*100 . "%<br>";
    echo "El 6 ha salido {$num6} con un porcenjate " . ($num6/N)*100 . "%<br>";

?>
    

<?php
}