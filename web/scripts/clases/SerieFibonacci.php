<?php

class SerieFibonacci implements Iterator
{
    private int $_limite;

    private int $_claveActual = 0;

    public function __construct(int $limite)
    {
        $this->_limite = $limite;
    }

    public function current(): int
    {
        return self::calcular($this->_claveActual);
    }

    public function key(): int
    {
        return $this->_claveActual;
    }

    public function next(): void
    {
        $this->_claveActual++;
    }

    public function rewind(): void
    {
        $this->_claveActual = 0;
    }

    public function valid(): bool
    {
        return $this->_claveActual <= $this->_limite;
    }

    private static function calcular(int $n): int
    {
        if ($n <= 1) {
            return $n;
        }

        $anterior = 0;
        $actual = 1;

        for ($i = 2; $i <= $n; $i++) {
            $siguiente = $anterior + $actual;

            $anterior = $actual;
            $actual = $siguiente;
        }

        return $actual;
    }

    public static function fFibonacci(int $ultimo): Generator
    {
        $anterior = 0;
        $actual = 1;

        for ($i = 0; $i <= $ultimo; $i++) {

            if ($i == 0) {
                yield 0;
            } else {
                yield $actual;

                $siguiente = $anterior + $actual;

                $anterior = $actual;
                $actual = $siguiente;
            }
        }
    }
}