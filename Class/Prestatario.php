<?php
class Prestatario {
    protected int $id_cliente;
    protected int|string $num_prestamo;

    public function __construct(int $id_cliente, int|string $num_prestamo) {
        $this->id_cliente = $id_cliente;
        $this->num_prestamo = $num_prestamo;
    }

    public function getIdCliente(): int {
        return $this->id_cliente;
    }

    public function getNumPrestamo(): int|string {
        return $this->num_prestamo;
    }
}
?>