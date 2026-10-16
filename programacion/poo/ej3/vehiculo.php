<?php

declare(strict_types=1);

class Vehiculo
{
    private string $marca;
    private string $modelo;
    private int $año;
    private int $kilometraje;

    public function __construct(
        string $marca,
        string $modelo,
        int $año,
        int $kilometraje = 0
    ) {
        if (trim($marca) === '') {
            throw new InvalidArgumentException(
                "La marca no puede estar vacía."
            );
        }

        if (trim($modelo) === '') {
            throw new InvalidArgumentException(
                "El modelo no puede estar vacío."
            );
        }

        if ($kilometraje < 0) {
            throw new InvalidArgumentException(
                "El kilometraje no puede ser negativo."
            );
        }

        if ($año <= 0) {
            throw new InvalidArgumentException(
                "El año debe ser un número positivo."
            );
        }

        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->año = $año;
        $this->kilometraje = $kilometraje;
    }

    public function getMarca(): string
    {
        return $this->marca;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getAño(): int
    {
        return $this->año;
    }

    public function getKilometraje(): int
    {
        return $this->kilometraje;
    }

    public function actualizarKilometraje(int $kilometros): void
    {
        if ($kilometros < 0) {
            throw new InvalidArgumentException(
                "Los km a agregar no pueden ser negativos."
            );
        }

        $this->kilometraje += $kilometros;
    }

    public function mostrarInformacion(): string
    {
        return "Marca: {$this->marca}<br>" .
               "Modelo: {$this->modelo}<br>" .
               "Año: {$this->año}<br>" .
               "Kilometraje: {$this->kilometraje} km";
    }
}