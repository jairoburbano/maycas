<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		maycas
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <?php include('svg-defs.svg'); ?>
    <body <?php body_class(); ?>>
        <div class="page-wrap">
            <header class="header">
                <div class="menu--top">
                    <a href="index.php" title="Maycas del Limari" class="logo">
                        <img src="img/logo.svg" alt="Logo Maycas del Limari">
                    </a><!--.logo-->
                    <div class="icon--mobile">
                        <span>Menú</span>
                        <div class="icon">
                            <div class="bar"></div>
                            <div class="bar"></div>
                            <div class="bar"></div>
                        </div><!--.icon-->
                    </div><!--.icon--mobile-->
                </div><!--.menu--top-->
                <div class="menu--bottom">
                    <div class="nav">
                        <a href="page-vinas.php" title="Conoce sobre nosotros" class="<?php if ( $page == 'vinas' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Viña Maycas del Limarí</a>
                        <a href="page-valle.php" title="Conoce nuestros valles" class="<?php if ( $page == 'valles' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Valle del limarí</a>
                        <a href="page-vinos.php" title="Mira nuestros vinos" class="<?php if ( $page == 'vinos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Nuestros Vinos</a>
                        <a href="page-novedades.php" title="Informate sobre nuestras novedades" class="<?php if ( $page == 'novedades' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Novedades</a>
                    </div><!--.nav-->
                    <div class="language-bar">
                        <a href="http://twitter.com" title="Siguenos en Twitter" class="redes">
                            <svg><use xlink:href="#shape-icon-twitter" /></svg>
                        </a>
                        <a href="http://facebook.com" title="Visitanos en Facebook" class="redes">
                            <svg><use xlink:href="#shape-icon-facebook" /></svg>
                        </a>
                        <span class="separador"></span>
                        <a href="#english" title="View Our site in English">English</a>
                        <a href="#espanol" title="Mira nuestro sitio en Español">Español</a>
                    </div><!--.language-bar-->
                    <a href="page-contacto.php" title="Contactate con nosotros" class="contacto-bar">
                        <svg><use xlink:href="#shape-icon-mail" /></svg>
                        Contacto
                    </a><!--Contacto solo mobile-->
                </div><!--.menu--bottom-->
            </header><!--.header-->