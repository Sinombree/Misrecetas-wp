<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página web sobre mis recetas">
    <meta name="keywords" content="Recetas, gastronomía, comida">
    <link rel="icon" href="images/Icono.png">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <?php wp_head(); ?>
</head>
<body>
    <div class="container">
        <header id="header" class=" row-full block-center-row mb-3">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Mis Recetas">
        </header>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id' => 'primary-menu',
                    'container' => 'nav',
                    'container_class' => 'nav-main block-center-row mb-2'
                )
            )
        ?>
        <nav class="nav-main fnt-lg block-center-row mb-2">
            <ul>
                <li>Inicio</li> 
                <li class="separator">|</li>
                <li><a href="Recetas.html">Recetas</a></li>
                <li class="separator">|</li>
                <li><a href="Contactar.html">Contactar</a></li>
            </ul>
        </nav>
