<?php
class CtaCliente {
    protected int $id_cliente;
    protected int|string $num_cta;

    public function __construct(int $id_cliente, int|string $num_cta) {
        $this->id_cliente = $id_cliente;
        $this->num_cta = $num_cta;
    }

    public function getIdCliente(): int {
        return $this->id_cliente;
    }

    public function getNumCuenta(): int|string {
        return $this->num_cta;
    }
}
?>