<?php

// Ejercicio 1
function cuentaVeces(array $array,string $cadena,int $num1,int $num2):true|false {

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
function generarCadena(int $num) {

    

}

// Ejercicio 3
function operaciones(string $tip,int $num1,int $num2) {

}

// Ejercicio 4
function devuelve(int $num1,int $num2,int $num3) {

}

// Ejercicio 5
function suma(int $num1,int $num2) {

}

function resta(int $num1,int $num2) {

}

function multiplicacion(int $num1,int $num2) {

}

function hacerOperacion(string $cadena,int $num1,int $num2) {

}

// Ejercicio 6
function AFuncion(int $num1,int $num2) {

}

// Ejercicio 7
function ordenar(array $array) {

}
