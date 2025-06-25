<?php
class Cuenta {
    protected int|string $num_cta;
    protected int $num_sucursal;
    protected float $saldo;
    protected string $fecha;

    public function __construct(int|string $num_cta, int $num_sucursal, float $saldo, string $fecha) {
        $this->num_cta = $num_cta;
        $this->num_sucursal = $num_sucursal;
        $this->saldo = $saldo;
        $this->fecha = $fecha;
    }

    public function getNumCuenta(): int|string {
        return $this->num_cta;
    }

    public function getNumSucursal(): int {
        return $this->num_sucursal;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function getFecha(): string {
        return $this->fecha;
    }
}
?>