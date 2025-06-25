<?php
require_once 'Cliente.php';
require_once 'CtaCliente.php';
require_once 'Cuenta.php';
require_once 'Prestatario.php';
require_once 'Sucursal.php';
require_once 'Prestamo.php';  

$cliente = new Cliente(
    1, 
    "Roca San Martin", 
    "Ohlsen 1222", 
    "Pilar", 
    "25/07/1999",
);

$cliente2 = new Cliente(
    59, 
    "Ruiz Matías", 
    "Las Cataratas 2020", 
    "Jose C. Paz", 
    "1/1/1988",
);

$CtaCliente = new CtaCliente(
    1,
    10,
);

$Cuenta = new Cuenta(
    10,
    20,
    27800,
    "13/03/2015",
);

$Cuenta2 = new Cuenta(
    9,
    3,
    27800,
    "13/03/2015",
);

$Prestatario = new Prestatario(
    1,
    20,
);

$Sucursal = new Sucursal(
    17,
    "Banco Provincia de Buenos Aires",
    "Malvinas Argentinas",
    "si",
);

$Sucursal2 = new Sucursal(
    3,
    "Banco Provincia de Tortuguitas",
    "Malvinas Argentinas",
    "si",
);

$Prestamo = new Prestamo(
    2,
    2810,
    5000,
    "9/12/18",
);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Clientes</h1>
    <ul>
        <li>
            <strong>ID: <?= $cliente->getId() ?></strong><br>
            Nombre: <?= $cliente->getNombre() ?><br>
            Dirección: <?= $cliente->getDireccion() ?><br>
            Distrito: <?= $cliente->getDistrito() ?><br>
            Fecha de Nacimiento: <?= $cliente->getNacimiento() ?><br>
            ¿Es del distrito Pilar?: <?= $cliente->distrito() ? 'Sí' : 'No' ?><br>
        </li>
    </ul>

    <h2>Datos de la Cuenta</h2>
    <ul>
        <li>
            <strong>Número de Cuenta: <?= $Cuenta->getNumCuenta() ?></strong><br>
            Número de Sucursal: <?= $Cuenta->getNumSucursal() ?><br>
            Saldo: $<?= number_format($Cuenta->getSaldo(), 2) ?><br>
            Fecha: <?= $Cuenta->getFecha() ?><br>
            ¿El saldo está entre $16,000 y $60,000?: <?= ($Cuenta->getSaldo() >= 16000 && $Cuenta->getSaldo() <= 60000) ? 'Sí' : 'No' ?><br>
        </li>
    </ul>

    <h2>Información de Sucursal</h2>
    <ul>
        <?php if ($Sucursal2->getDistrito() !== "Pilar"): ?>
            <li>
                <strong>Número de Sucursal: <?= $Sucursal2->getNumSucursal() ?></strong><br>
                Distrito: <?= $Sucursal2->getDistrito() ?><br>
                Activo: <?= ($Sucursal2->getDistrito() === "Malvinas Argentinas") ? 'Sí' : 'No' ?><br>
            </li>
        <?php endif; ?>
    </ul>

    <h2>Datos del Cliente con Apellido 'Ruiz'</h2>
    <ul>
        <?php
        $nombreCompleto = $cliente2->getNombre();
        $apellido = explode(' ', $nombreCompleto)[0];
        if ($apellido === 'Ruiz'):
        ?>
            <li>
                <strong>ID Cliente: <?= $cliente2->getId() ?></strong><br>
                Nombre: <?= $cliente2->getNombre() ?><br>
                Dirección: <?= $cliente2->getDireccion() ?><br>
                Distrito: <?= $cliente2->getDistrito() ?><br>
                Nacimiento: <?= $cliente2->getNacimiento() ?><br>
            </li>
        <?php endif; ?>
    </ul>
</body>
</html>