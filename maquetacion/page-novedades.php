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
$page = 'novedades';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Novedades';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap novedades">
    <h1 class="sub-title">Novedades</h1>
    <div class="bajada">
        <p>
            El Valle se encuentra inmerso en una de las zonas con los cielos más despejados del mundo.
        </p>
    </div><!--.bajada-->
    <div class="content--novedades">
        <!--NOTE: Inicia Item-->
        <a href="single-novedades.php" title="Titulo de item" class="item__novedades">
            <span class="item__media" style="background-image: url(assets/news/news1.jpg)"></span><!--.item__media-->
            <span class="item__title">
                Maycas del limarí comienza el año con extraordinarios puntajes en the wine advocate
            </span><!--.item__title-->
        </a><!--.item__novedades-->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <a href="single-novedades.php" title="Titulo de item" class="item__novedades">
            <span class="item__media" style="background-image: url(assets/news/news2.jpg)"></span><!--.item__media-->
            <span class="item__title">
                Nuevos videos documentales de Maycas de Limarí
            </span><!--.item__title-->
        </a><!--.item__novedades-->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <a href="single-novedades.php" title="Titulo de item" class="item__novedades">
            <span class="item__media" style="background-image: url(assets/news/news3.jpg)"></span><!--.item__media-->
            <span class="item__title">
                Vinos blancos del Limarí son reconocidos con 90 puntos en "the Wine Advocate"
            </span><!--.item__title-->
        </a><!--.item__novedades-->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <a href="single-novedades.php" title="Titulo de item" class="item__novedades">
            <span class="item__media" style="background-image: url(assets/news/news4.jpg)"></span><!--.item__media-->
            <span class="item__title">
                Decanter recomienda 15 vinos "top" de Chile y evalúa a maycas del Limarí Quebrada Seca 2008 con el mayor puntaje
            </span><!--.item__title-->
        </a><!--.item__novedades-->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <a href="single-novedades.php" title="Titulo de item" class="item__novedades">
            <span class="item__media" style="background-image: url(assets/news/news5.jpg)"></span><!--.item__media-->
            <span class="item__title">
                Sumaq pinot noir 2013 obtiene única medalla de oro en su categoría a nivel mundial
            </span><!--.item__title-->
        </a><!--.item__novedades-->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <a href="single-novedades.php" title="Titulo de item" class="item__novedades">
            <span class="item__media" style="background-image: url(assets/news/news6.jpg)"></span><!--.item__media-->
            <span class="item__title">
                Excelentes comentarios sobre Maycas del Limarí en distintos medios canadienses
            </span><!--.item__title-->
        </a><!--.item__novedades-->
        <!--NOTE: Termina Item-->
    </div><!--.content--novedades-->
    <button class="btn btn--more" title="Cargar mas novedades">Ver más novedades</button>
    <!--NOTE: LOADER-->
    <div class="block--container">
        <div id="blok1" class="blokje"></div>
    </div>
</div><!--.wrap.novedades-->
<div class="design"></div>
<?php include 'footer.php'; ?>