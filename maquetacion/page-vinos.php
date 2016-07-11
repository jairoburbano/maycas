<?php
/**
 * template-{Valor}.php
 *
 *
 * @package		maycas
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'vinos';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Nuestros Vinos';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="banner__container">
        <h1 class="banner__title">Nuestros Vinos</h1><!--.banner__title-->
        <div class="banner__content">
            <h3 class="destacado">Ofrecemos vinos frescos y elegantes,</h3>
            <p>
                Marcados por una notable mineralidad, que nos diferencia de cualquier otra viña
            </p>
        </div><!--.banner__content-->
    </div><!--.banner__container-->
    <div class="banner__image">
        <img src="assets/vinos.jpg" alt="Titulo">
    </div><!--.banner__image-->
</div><!--.banner-->
<div class="page--container">
    <nav class="inside-menu">
        <a href="#vinos-iconos" title="Revisa nuestros vinos icono" class="m-one">
            <img src="img/nav-vinos-iconos.svg" alt="Logo vinos iconos">
        </a>
        <a href="#reserva-especial" title="Mira nuestra reserva especial" class="m-two">
            <img src="img/nav-reserva-especial.svg" alt="Logo reserva especial">
        </a>
        <a href="#sumaq" title="Mira nuestros vinos SUMAQ" class="m-three">
            <img src="img/nav-sumaq.svg" alt="Logo Sumaq">
        </a>
    </nav><!--.inside-menu-->
    <div class="vinos__container">
        <!--NOTE: ID para ancla de menu, Clase slug para marca de agua-->
        <section id="vinos-iconos" class="vinos__item vinos-iconos">
            <div class="vinos__header">
                <div class="vino__logo">
                    <img src="img/nav-vinos-iconos.svg" alt="Logo vinos iconos">
                </div><!--.vino__logo-->
                <div class="vino__descripcion">
                    <p>
                        <strong>
                            El Inti o Sol, con los 24 puntos de oro que aparecen en la etiqueta de Quebrada Seca y San Julián,
                        </strong>
                        representan los 24 meses que transcurren para crear estos vinos: desde el brote, la cosecha y el envejecimiento, hasta que se embotella.
                    </p>
                </div><!--.vino__descripcion-->
            </div><!--.vinos__header-->
            <div class="vino__slide js-slide">
                <ul class="slides">
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <!--NOTE: Solo estos 3 tiene logo 1-3-->
                            <span class="item__logo">
                                <img src="img/vinos/quebrada-seca.svg" alt="Logo quebrada seca">
                            </span><!--.item__logo-->
                            <span class="item__bottle">
                                <img src="assets/botellas/_0005_Q-Seca-.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Chardonnay
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <!--NOTE: Solo estos 3 tiene logo 2-3-->
                            <span class="item__logo">
                                <img src="img/vinos/san-julian.svg" alt="Logo San Julian">
                            </span><!--.item__logo-->
                            <span class="item__bottle">
                                <img src="assets/botellas/_0006_S-Julian.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Pinot Noir
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <!--NOTE: Solo estos 3 tiene logo 3-3-->
                            <span class="item__logo">
                                <img src="img/vinos/los-acacios.svg" alt="Logo Los Acacios">
                            </span><!--.item__logo-->
                            <span class="item__bottle">
                                <img src="assets/botellas/acacios.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Sirah
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                </ul><!--.slides-->
            </div><!--.vino__slide js-slide-->
        </section><!--.vinos__item-->
        <!--NOTE: ID para ancla de menu, Clase slug para marca de agua-->
        <section id="reserva-especial" class="vinos__item reserva-especial">
            <div class="vinos__header">
                <div class="vino__logo">
                    <img src="img/nav-reserva-especial.svg" alt="Logo Reserva especial">
                </div><!--.vino__logo-->
                <div class="vino__descripcion">
                    <p>
                        <strong>
                            Maycas del Limarí Reserva Especial expresa todo el frescor y la mineralidad que caracterizan al valle nortino donde se origina.
                        </strong>
                    </p>
                </div><!--.vino__descripcion-->
            </div><!--.vinos__header-->
            <div class="vino__slide js-slide">
                <ul class="slides">
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="item__bottle">
                                <img src="assets/botellas/_0004_Res-E-Chard-SA.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Chardonnay
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="item__bottle">
                                <img src="assets/botellas/_0003_Res-E-PN-SA.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Pinot Noir
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="item__bottle">
                                <img src="assets/botellas/_0002_Res-E-Sy-SA.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Sirah
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                </ul><!--.slides-->
            </div><!--.vino__slide js-slide-->
        </section><!--.vinos__item-->
        <!--NOTE: ID para ancla de menu, Clase slug para marca de agua-->
        <section id="sumaq" class="vinos__item sumaq">
            <div class="vinos__header">
                <div class="vino__logo">
                    <img src="img/nav-sumaq.svg" alt="Logo sumaq">
                </div><!--.vino__logo-->
                <div class="vino__descripcion">
                    <p>
                        <strong>
                            Las variedades de la línea Sumaq se caracterizan por ser vinos de mucha tipicidad que destacan por su frescor y mineralidad.
                        </strong>
                        Reflejan un buen carácter del Valle del Limarí, en un estilo simple.
                    </p>
                </div><!--.vino__descripcion-->
            </div><!--.vinos__header-->
            <div class="vino__slide js-slide">
                <ul class="slides">
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="item__bottle">
                                <img src="assets/botellas/_0000_SUMAQ_chardonnay_alta.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Chardonnay
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="item__bottle">
                                <img src="assets/botellas/_0001_SUMAQ_pinot.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Pinot Noir
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                    <li class="item__vino">
                        <a href="single-vino.php" title="Titulo vino">
                            <span class="item__bottle">
                                <img src="assets/botellas/_0001_SUMAQ_syrah.png" alt="Titulo vino">
                            </span><!--.item__bottle-->
                            <span class="item__title">
                                Sirah
                            </span><!--.item__title-->
                        </a>
                    </li><!--.item__vino-->
                </ul><!--.slides-->
            </div><!--.vino__slide js-slide-->
        </section><!--.vinos__item-->
    </div><!--.vinos__container-->
</div><!--.page--container-->
<?php include 'footer.php'; ?>