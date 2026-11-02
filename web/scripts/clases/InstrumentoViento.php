<?php

class InstrumentoViento extends InstrumentoBase
{
    protected string $_material = "madera";

    public function __construct(
        string $material = "madera",
        int $edad = 15
    ) {
        parent::__construct("instrumento de viento", $edad);

        $this->_material = $material;
    }

    public final function afinar(): string
    {
        return "Ajustar las llaves y comprobar la afinación "
            . "soplando correctamente.";
    }

    public function sonido(): string
    {
        return "El instrumento produce un sonido mediante el aire.";
    }

    public function __toString(): string
    {
        return parent::__toString()
            . " Instrumento de material " . $this->_material;
    }
}