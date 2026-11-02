<?php

class ClaseMisPropiedades implements IteratorAggregate
{
    private array $_propiedades = [];

    public mixed $propPublica;

    private mixed $_propPrivada = 25;

    public function __set(string $nombre, mixed $valor): void
    {
        if (
            $nombre === "_propPrivada" ||
            $nombre === "_propiedades" ||
            $nombre === "propPublica"
        ) {
            throw new Exception(
                "No se puede modificar esta propiedad."
            );
        }

        $this->_propiedades[$nombre] = $valor;
    }

    public function __get(string $nombre): mixed
    {
        if (
            $nombre === "_propPrivada" ||
            $nombre === "_propiedades"
        ) {
            throw new Exception(
                "No se puede acceder a esta propiedad."
            );
        }

        if (array_key_exists($nombre, $this->_propiedades)) {
            return $this->_propiedades[$nombre];
        }

        throw new Exception(
            "La propiedad " . $nombre . " no existe."
        );
    }

    public function __isset(string $nombre): bool
    {
        return isset($this->_propiedades[$nombre]);
    }

    public function __unset(string $nombre): void
    {
        unset($this->_propiedades[$nombre]);
    }

    public function getIterator(): Traversable
    {
        $resultado = [];

        foreach ($this->_propiedades as $clave => $valor) {
            $resultado["oi_" . $clave] = $valor;
        }

        $resultado["oi_propPublica"] = $this->propPublica;

        $resultado["oi__propPrivada"] = $this->_propPrivada;

        return new ArrayIterator($resultado);
    }
}