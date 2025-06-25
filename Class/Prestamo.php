<?php
class Prestamo {
    protected int|string $num_prestamo;
    protected int $num_sucursal;
    protected float $importe;
    protected string $fecha;

    public function __construct(int|string $num_prestamo, int $num_sucursal, float $importe, string $fecha) {
        $this->num_prestamo = $num_prestamo;
        $this->num_sucursal = $num_sucursal;
        $this->importe = $importe;
        $this->fecha = $fecha;
    }

    public function getNumPrestamo(): int|string {
        return $this->num_prestamo;
    }

    public function getNumSucursal(): int {
        return $this->num_sucursal;
    }

    public function getImporte(): float {
        return $this->importe;
    }

    public function getFecha(): string {
        return $this->fecha;
    }
}
?>