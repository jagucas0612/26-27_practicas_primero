<?php

enum EstadoCivil: int
{
    case SOLTERO = 10;
    case CASADO = 20;
    case PAREJA = 30;
    case VIUDO = 40;

    public function descripcion(): string
    {
        return match ($this) {
            self::SOLTERO => "soltero",
            self::CASADO => "casado",
            self::PAREJA => "pareja",
            self::VIUDO => "viudo"
        };
    }

    public function valor(): int
    {
        return $this->value;
    }

    public static function casos(): array
    {
        return self::cases();
    }
}