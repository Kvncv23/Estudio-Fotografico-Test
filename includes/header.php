<?php
// Variables por defecto si no se definen en la página principal
$pageTitle = $pageTitle ?? 'Fotopic';
$pageCss = $pageCss ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?></title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <link rel="stylesheet" href="assets/css/global.css">

    <?php if (!empty($pageCss)): ?>
        <link rel="stylesheet" href="assets/css/<?= htmlspecialchars($pageCss) ?>">
    <?php endif; ?>
</head>
<body>

<header class="main-header">
    <div class="container header-container">
        <a href="index.php" class="logo">Fotopic</a>
        <nav class="main-nav">
            <ul>
                <li><a href="#servicios">Servicios</a></li>
                <li><a href="#portafolio">Portafolio</a></li>
                <li><a href="#nosotros">Nosotros</a></li>
            </ul>
        </nav>
        <a href="#contacto" class="btn btn-outline">Reserva ahora</a>
    </div>
</header>