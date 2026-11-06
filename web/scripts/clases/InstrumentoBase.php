<?php

abstract class InstrumentoBase
{
    private string $_descripcion;

    protected int $_edad = 10;

    protected static int $_totalInstancias = 0;

    protected int $_numeroInstancia;

    public function __construct(
        string $descripcion,
        int $edad = 10
    ) {
        $this->_descripcion = $descripcion;
        $this->_edad = $edad;

        self::$_totalInstancias++;

        $this->_numeroInstancia = self::$_totalInstancias;
    }

    public function getDescripcion(): string
    {
        return $this->_descripcion;
    }

    public function setDescripcion(string $descripcion): void
    {
        $this->_descripcion = $descripcion;
    }

    public function getEdad(): int
    {
        return $this->_edad;
    }

    abstract public function sonido(): string;

    abstract public function afinar(): string;

    public function envejecer(): void
    {
        $this->_edad++;
    }

    public function __toString(): string
    {
        return "Instrumento con descripción "
            . $this->_descripcion
            . ", instancia " . $this->_numeroInstancia
            . " de un total de " . self::$_totalInstancias
            . ". Tiene " . $this->_edad
            . " años. La clase es " . get_class($this);
    }
}