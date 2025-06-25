<?php
class Sucursal {
    protected int $num_sucursal;
    protected string $nombre_sucursal;
    protected string $distrito;
    protected bool $activo;

    public function __construct(int $num_sucursal, string $nombre_sucursal, string $distrito, bool $activo) {
        $this->num_sucursal = $num_sucursal;
        $this->nombre_sucursal = $nombre_sucursal;
        $this->distrito = $distrito;
        $this->activo = $activo;
    }

    public function getNumSucursal(): int {
        return $this->num_sucursal;
    }

    public function getNombreSucursal(): string {
        return $this->nombre_sucursal;
    }

    public function getDistrito(): string {
        return $this->distrito;
    }

    public function estaActiva(): bool {
        return $this->activo;
    }
}
?>