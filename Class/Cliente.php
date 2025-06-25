<?php
    class Cliente {
        protected int $id_cliente;
        protected string $nombre_cliente;
        protected string|int $direccion;
        protected string $distrito;
        protected string $nacimiento;

        public function __construct(int $id, string $nombre_cliente, string|int $direccion, string $distrito, string $nacimiento) {
            $this->id_cliente = $id;
            $this->nombre_cliente = $nombre_cliente;
            $this->direccion = $direccion;
            $this->distrito = $distrito;
            $this->nacimiento = $nacimiento;
        }

        public function distrito(): bool {
            return $this->distrito == "Pilar";
        }
        
        public function getId(): int {
            return $this->id_cliente;
        }
        
        public function getNombre(): string {
            return $this->nombre_cliente;
        }
        
        public function getDireccion(): string|int {
            return $this->direccion;
        }
        
        public function getDistrito(): string {
            return $this->distrito;
        }
        
        public function getNacimiento(): string {
            return $this->nacimiento;
        }
    }
?>