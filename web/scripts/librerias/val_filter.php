<?php
/**
 * Comprueba que $var contiene un entero cuyo valor esta entre $min y $max.
 * En $var se devuelve el entero saneado (En caso de no cumplir las condiciones asigna a $var el valor $defecto).
 *
 * @param integer $var
 * @param integer $min
 * @param integer $max
 * @param integer $defecto
 * @return boolean
 */
function validaEntero(int &$var, int $min, int $max, int $defecto):bool {
    return true;
}

/**
 * Comprueba que $var contiene un entero cuyo valor esta entre $min y $max.
 * En $var se devuelve el real saneado (En caso de no cumplir las condiciones asigna a $var el valor $defecto).
 *
 * @param float $var
 * @param float $min
 * @param float $max
 * @param float $defecto
 * @return boolean
 */
function validaReal(float &$var, float $min, float $max, float $defecto):bool {
    return true;
}

/**
 * Comprueba que $var contiene una fecha correcta en el formato "dd/mm/yyyy".
 * En $var se devuelve la fecha saneada (2 cifras para dia y mes y 4 para año)
 * En caso de no cumplir las condiciones devuelve $defecto en $var.
 *
 * @param string $var
 * @param string $defecto
 * @return boolean
 */
function validaFecha(string &$var, string $defecto):bool {
    return true;
}

/**
 * Comprueba que $var contiene una fecha correcta en el formato "hh:mm:ss".
 * En $var se devuelve la fecha saneada (2 cifras para horas, minutos y segundos)
 * En caso de no cumplir las condiciones devuelve $defecto en $var.
 *
 * @param string $var
 * @param string $defecto
 * @return boolean
 */
function validaHora(string &$var, string $defecto):bool {
    return true;
}

/**
 * Comprueba que $var contiene un email correcto en el formato "aaaaaa@bbbbb.ccc"
 * En $var se devuelve el email saneado (En caso de no cumplir las condiciones se asigna $defecto)
 *
 * @param string $var
 * @param string $defecto
 * @return boolean
 */
function validaEmail(string &$var, string $defecto):bool {
    return true;
}

/**
 * Comprueba que $var contiene una cadena de longitud máxima $longitud.
 * En caso de no cumplir las condiciones se asigna $var a $defecto
 *
 * @param string $var
 * @param integer $longitud
 * @param string $defecto
 * @return boolean
 */
function validaCadena(string &$var, int $longitud, string $defecto):bool {
    return true;
}

/**
 * Comprueba que $var cumple con la expresión regular $expresion. 
 * En caso de no cumplir lascondiciones se asigna a $var el valor por $defecto
 * 
 * @param string $var
 * @param string $expresion
 * @param string $defecto
 * @return boolean 
 */
function validaExpresión(string &$var, string $expresion, string $defecto):bool {
    return true;
}

/**
 * Comprueba que $var sea igual a uno de los elementos del array $posibles ($tipo=1) o 
 * a una de las claves del array $posibles ($tipo=2). 
 *
 * @param mixed $var
 * @param array $posibles
 * @param integer $tipo
 * @return boolean
 */
function validaRango(mixed $var, array $posibles, int $tipo=1):bool {
    return true;
}
