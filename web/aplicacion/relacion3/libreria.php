<?php

// Ejercicio 1
function cuentaVeces(array $array,string $cadena,int $num1,int &$num2):bool {

    static $num_ejec = 0;

    if(($cadena == "2daw") || ($cadena == "primera")) {
        return false;
    }

    $array[$cadena] = $num1;
    $num_ejec++;
    $num2 = $num_ejec;
    return true;

}

// Ejercicio 2
function generarCadena(int $num = 10):string|false {

    if($num<=0)
        return false;

    $caracteresValidos = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $cadena = substr(str_shuffle($caracteresValidos),0,$num);

    return $cadena;

}

// Ejercicio 3
function operaciones(int $tip, int ...$nums) {

    switch($tip) {
        case 1: return array_sum($nums);
        case 2:
            $resultado = $nums[0];

            foreach(array_slice($nums,1) as $numero) {
                $resultado -= $numero;
            }

            return $resultado;
        case 3:
            $resultado = 1;

            foreach($nums as $numero) {
                $resultado *= $numero;
            }

            return $resultado;
        default:
            $resultado = 0;

            foreach ($nums as $indice => $numero) {
                if ($indice % 2 == 0) {
                    $resultado += $numero;
                } else {
                    $resultado -= $numero;
                }
            }

            return $resultado;
    }

}

// Ejercicio 4
function devuelve(int &$num1,int $num2=3,int $num3=10) {
    
    $num1 = $num1 + $num2 + $num3;

    return $num1 * $num2 * $num3;

}

// Ejercicio 5
function suma(int $num1,int $num2) {
    return $num1 + $num2;
}

function resta(int $num1,int $num2) {
    return $num1 - $num2;
}

function multiplicacion(int $num1,int $num2) {
    return $num1 * $num2;
}

function hacerOperacion(string $operacion,int $num1,int $num2) {

    if (!in_array($operacion, ["suma", "resta", "multiplicacion"])) {
        return false;
    }

    return $operacion($num1, $num2);

}

// Ejercicio 6
function AFuncion(int $num1,int $num2, callable $callback):int {
    return $callback($num1,$num2);
}

// Ejercicio 7
function ordenar(array $array) {
    usort($array, function($a, $b) {
        return strlen($b) - strlen($a);
    });

    return $array;
}
