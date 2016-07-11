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
$type = 'single';
$template = '';
$title = 'Single Novedades';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="novedades single__novedades">
    <div class="wrap">
        <h1 class="sub-title">Novedades</h1>
        <!--NOTE: contenido administrable-->
        <div class="content--single">
            <!--NOTE: Inicia contenido-->
            <h1>Maycas del limarí comienza el año con extraordinarios puntajes en the wine advocate</h1>
            <img src="assets/news/news1.jpg" alt="Titulo imagen">
            <h2>Subtitulo</h2>
            <p>
                Reconocida como una de las publicaciones más influyentes en el rubro en Canadá, Vintages Magazine otorgó en su edición de junio un lugar privilegiado a Maycas del Limarí Reserva Especial Syrah, calificándolo como un referente para los Syrah de Chile y “un líder para la región”, marcado por las características del terroir del Valle del Limarí.
            </p>
            <p>
                En la misma edición también se destacó Maycas del Limarí Reserva Especial Chardonnay, el cual fue recomendado como el acompañamiento perfecto para pollo al merquén con cilantro. <a href="#" title="Titulo">http://www.vintages.com/circular/120609/index.shtml#/2/</a>
            </p>
            <p>
                Al mismo tiempo, John Szabo (<a href="#" title="titulo">@johnszabo</a>), Master Sommelier de Canadá, en una nota para Wine Align, describió la mineralidad y la frescura poco común de los vinos de Maycas del Limarí. <a href="#" title="titulo">http://www.winealign.com/blog/2012/06/01/john-szabos-vintages-preview-for-ju</a>
            </p>
            <h2>Otros artículos relacionados:</h2>
            <ul>
                <li>
                    <a href="#" title="titulo">http://www.therecord.com/living/article/740051–wines-spirits-there-s-lots-of-value-in-upscale-chilean-wines</a>
                </li>
                <li>
                    <a href="#" title="titulo">http://vintagedirect.wordpress.com/tag/maycas-del-limari/</a>
                </li>
                <li>
                    <a href="#" title="titulo">http://life.nationalpost.com/2012/06/09/lawrasons-take-on-vintages-june-9-release/</a>
                </li>
            </ul>
            <!--NOTE: Termina contenido-->
            <div class="share">
                <p class="share__text">Compartir</p>
                <a href="#" title="Comparte en Twitter" class="share__item popup">
                    <span class="icon"><svg><use xlink:href="#shape-icon-twitter" /></svg></span>
                    <span class="text">Tweet</span>
                </a>
                <a href="#" title="Comparte en Facebook" class="share__item popup">
                    <span class="icon"><svg><use xlink:href="#shape-icon-facebook" /></svg></span>
                    <span class="text">Compartir</span>
                </a>
                <a href="#" title="Enviaselo a un amigo por mail" class="share__item popup">
                    <span class="icon"><svg><use xlink:href="#shape-icon-mail" /></svg></span>
                    <span class="text">Enviar</span>
                </a>
            </div><!--.share-->
        </div><!--.content--single-->
    </div><!--.wrap-->
    <div class="content--novedades related">
        <!--NOTE: Inicia Item-->
        <a href="single-novedades.php" title="Titulo de item" class="item__novedades">
            <!--NOTE: Se agrega item__text lo demas es igual al item de novedades-->
            <span class="item__text">Anterior</span>
            <span class="media__content">
                <span class="item__media--overlay"></span>
                <span class="item__media" style="background-image: url(assets/news/news1.jpg)"></span><!--.item__media-->
            </span>
            <span class="item__title">
                Maycas del limarí comienza el año con extraordinarios puntajes en the wine advocate
            </span><!--.item__title-->
        </a><!--.item__novedades-->
        <!--NOTE: Termina Item-->
        <!--NOTE: Inicia Item-->
        <a href="single-novedades.php" title="Titulo de item" class="item__novedades">
            <!--NOTE: Se agrega item__text lo demas es igual al item de novedades-->
            <span class="item__text">Siguiente</span>
            <span class="media__content">
                <span class="item__media--overlay"></span>
                <span class="item__media" style="background-image: url(assets/news/news1.jpg)"></span><!--.item__media-->
            </span>
            <span class="item__title">
                Nuevos videos documentales de Maycas de Limarí
            </span><!--.item__title-->
        </a><!--.item__novedades-->
        <!--NOTE: Termina Item-->
    </div><!--.content--novedades.related-->
</div><!--.novedades-->
<div class="design"></div>
<?php include 'footer.php'; ?>