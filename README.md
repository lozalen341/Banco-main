# 🏦 Proyecto Banco en PHP

Este es un proyecto simulado de un sistema bancario desarrollado en PHP utilizando **programación orientada a objetos (POO)**. El sistema gestiona entidades como clientes, cuentas bancarias, préstamos y sucursales, organizadas a través de clases separadas que reflejan el modelo del dominio.

## 📁 Estructura del Proyecto

- `Cliente.php`: representa a los clientes del banco.
- `CtaCliente.php`: gestiona la relación entre clientes y sus cuentas.
- `Cuenta.php`: define las cuentas bancarias y sus operaciones.
- `Prestamo.php`: representa los préstamos otorgados por el banco.
- `Prestatario.php`: conecta préstamos con los clientes que los solicitan.
- `Sucursal.php`: representa las sucursales del banco.
- `index.php`: punto de entrada donde se prueban las clases y relaciones entre objetos.

## 🧱 Clases Principales

### `Cliente`
Contiene los datos personales del cliente como DNI, nombre y dirección. Incluye métodos para mostrar y acceder a su información.

### `Cuenta`
Representa una cuenta bancaria. Tiene un número, saldo, tipo de cuenta y número de sucursal. Permite acceder y modificar sus propiedades.

### `CtaCliente`
Modela la relación entre una cuenta y un cliente, incluyendo el tipo de titularidad.

### `Prestamo`
Almacena la información de un préstamo, como su número, monto, número de sucursal y tipo.

### `Prestatario`
Establece el vínculo entre un préstamo y el cliente que lo solicitó.

### `Sucursal`
Define las sucursales del banco mediante un número y una dirección física.

## 🧪 Uso

El archivo `index.php` instancia objetos de las distintas clases y demuestra cómo interactúan entre sí. Sirve como ejemplo para comprender la lógica y probar el sistema.

```php
$cliente1 = new Cliente("12345678", "Juan Pérez", "Calle Falsa 123");
$cuenta1 = new Cuenta("0001", 10000, "Caja de Ahorro", 1);
$ctaCliente1 = new CtaCliente("12345678", "0001", "Titular");
