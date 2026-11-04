<?php

final class Flauta extends InstrumentoViento implements IFabricable
{
    private function __construct(
        string $material = "madera",
        int $edad = 15
    ) {
        parent::__construct($material, $edad);
    }

    public static function CrearDesdeArray(array $datos): Flauta
    {
        $material = $datos["material"] ?? "madera";
        $edad = $datos["edad"] ?? 15;

        return new Flauta($material, $edad);
    }

    public function __clone()
    {
        $this->_edad = 0;

        self::$_totalInstancias++;

        // La propiedad de instancia debe recibir el nuevo número.
        $this->_numeroInstancia = self::$_totalInstancias;
    }

    public function metodoFabricacion(): string
    {
        return "Seleccionar la madera, cortar el tubo, "
            . "realizar los orificios y montar las piezas.";
    }

    public function metodoReciclado(): string
    {
        return "Separar los componentes y reciclar la madera "
            . "y las piezas metálicas según su material.";
    }
}