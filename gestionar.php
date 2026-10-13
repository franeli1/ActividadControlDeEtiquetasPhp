<?php
// ===== APARTADO 5: Inicialización de sesión =====
session_name("ud1_24"); // Cambiar XY por el número de PC
session_start();

if (!isset($_SESSION['servicios'])) {
    $_SESSION['servicios'] = [];
    $_SESSION['numero_version'] = 1;
}

function incrementarVersion() {
    $_SESSION['numero_version']++;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Presupuesto Catering - UD1</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 5px; text-align: left; }
        .errores { color: red; }
    </style>
</head>
<body>
<h1>Gestión de Presupuesto de Catering</h1>
<p>Versión: <?= $_SESSION['numero_version'] ?></p>
