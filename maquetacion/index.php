<?php
/**
 * Archivo principal.
 *
 * Aquí se muestra todo lo que se ve en la portada de la página
 *
 * @package		maycas
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
$page = 'home';
$subpage = '';
include 'header.php'; ?>
<div class="index">
    <div class="index__item block--full">
        <div class="index__item__image">
            <img src="assets/bg1-home.jpg" alt="Titulo">
        </div><!--.index__item__image-->
        <div class="index__item__video">
            <video id="video" class="banner__video" poster="assets/bg1-home.jpg" loop>
                <source src="http://www.reactor.cl/wp-content/uploads/2014/08/secuencia-01_1.mp4" type="video/mp4">
                <source src="http://www.reactor.cl/wp-content/uploads/2014/08/secuencia-01_1-webmhd.webm" type="video/webm">
                <p>
                    Your browser doesn't support HTML5 video.
                </p>
            </video>
        </div><!--.index__item__video-->
        <div class="index__item__content">
            <h2 class="index__item__title">Viña Maycas del limarí</h2><!--.index__item__title-->
            <div class="index__item__text">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit
                </p>
            </div><!--.index__item__text-->
            <a href="page-vinas.php" class="btn btn--border" title="Conoce acerca de nuestras viñas">Ver más</a>
        </div><!--.index__item__content-->
    </div><!--.index__item.block--full-->
    <div class="block--flex">
        <div class="index__item block--half">
            <div class="index__item__image">
                <img src="assets/bg2-home.jpg" alt="Titulo">
            </div><!--.index__item__image-->
            <div class="index__item__video">
                <video id="video" class="banner__video" poster="assets/bg1-home.jpg" loop>
                    <source src="http://www.reactor.cl/wp-content/uploads/2014/08/secuencia-01_1.mp4" type="video/mp4">
                    <source src="http://www.reactor.cl/wp-content/uploads/2014/08/secuencia-01_1-webmhd.webm" type="video/webm">
                    <p>
                        Your browser doesn't support HTML5 video.
                    </p>
                </video>
            </div><!--.index__item__video-->
            <div class="index__item__content">
                <h2 class="index__item__title">Valle del Limarí</h2><!--.index__item__title-->
                <div class="index__item__text">
                    <p>
                        Ipsum dolor sit amet
                    </p>
                </div><!--.index__item__text-->
                <a href="page-valle.php" class="btn btn--border" title="Conoce nuestros valles">Ver más</a>
            </div><!--.index__item__content-->
        </div><!--.index__item.block--half-->
        <div class="index__item block--half">
            <div class="index__item__image">
                <img src="assets/bg3-home.jpg" alt="Titulo">
            </div><!--.index__item__image-->
            <div class="index__item__video">
                <video id="video" class="banner__video" poster="1.jpg">
                    <source src="MVI_4210_1.mp4" type="video/mp4">
                    <!--                    <source src="http://www.reactor.cl/wp-content/uploads/2014/08/secuencia-01_1-webmhd.webm" type="video/webm">-->
                    <p>
                        Your browser doesn't support HTML5 video.
                    </p>
                </video>
            </div><!--.index__item__video-->
            <div class="index__item__content">
                <h2 class="index__item__title">Nuestros Vinos</h2><!--.index__item__title-->
                <div class="index__item__text">
                    <p>
                        Consectetur adipiscing elit
                    </p>
                </div><!--.index__item__text-->
                <a href="page-vinos.php" class="btn btn--border" title="Mira nuestros vinos">Ver más</a>
            </div><!--.index__item__content-->
        </div><!--.index__item.block--half-->
    </div><!--.block--flex-->
    <div class="loader">
        <div class="loader--box">
            <img src="img/maycas404.svg" alt="Logo Maycas del Limari">
            <div class="loader__icon">
                <div class="spinner">
                    <div class="spinner__item1"></div>
                    <div class="spinner__item2"></div>
                    <div class="spinner__item3"></div>
                    <div class="spinner__item4"></div>
                </div>
            </div><!-- /.loader__icon -->
        </div><!-- /.loader--box -->
    </div><!-- /.loader -->
</div><!--.index-->
<?php include 'footer.php'; ?>