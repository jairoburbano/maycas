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
$page = 'vinas';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Viña Maycas de Limari';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="banner">
    <div class="banner__container">
        <!--NOTE: La clase "small-tit" se diferencia en los banners lo demas es igual en todas las paginas que tengan este banner-->
        <h1 class="banner__title small__tit">Viña Maycas del Limarí</h1><!--.banner__title-->
        <div class="banner__content">
            <h3 class="destacado">Maycas es un proyecto de vinos de alta gama que encuentra su origen en el Valle del Limarí,</h3>
            <p>
                aprovechando las características únicas de este valle para producir las cepas clásicas de la borgoña (Chardonnay y Pinot Noir).
            </p>
        </div><!--.banner__content-->
    </div><!--.banner__container-->
    <div class="banner__image">
        <img src="assets/quebradaseca.jpg" alt="Titulo">
    </div><!--.banner__image-->
</div><!--.banner-->
<section class="block--full color--box">
    <div class="wrap">
        <h1 class="sub-title">Concepto Enológico</h1>
        <div class="content split--column">
            <p>
                En 1996, <strong>Marcelo Papa</strong> quería llevar a cabo su inquietud por hacer un proyecto de calidad y diferente… Chile daba para eso. Es así como comenzó a investigar los diversos valles, hasta que encontró en Limarí aquellos atributos ideales. La luminosidad que refleja el valle, la camanchaca que arremete en la mañana , el frescor que proviene de las brisas del Océano Pacífico y los suelos ricos en arcillas rojas y base calcárea, permitieron que Marcelo dibujara un proyecto que nace en lo que él llama: <strong>Un valle mágico.</strong>
            </p>
            <p>
                La idea original fue expresar su origen y encontró que las variedades clásicas de la borgoña podían expresar su calidad, pero con un carácter diferente al ser cultivadas en el Valle del Limarí.
            </p>
        </div><!--.content.split--column-->
    </div><!--.wrap-->
</section><!--.block--full.color--box-->
<section class="wrap team">
    <!--NOTE: Inicia Item Team-->
    <div class="team__item">
        <div class="team__media" style="background-image: url(assets/team/Marcelo.jpg);"></div><!--.team__media-->
        <div class="team__content">
            <div class="team--top">
                <h2 class="team__title">Marcelo Papa</h2>
                <h4 class="team__cargo">Enólogo</h4>
            </div><!--.team--top-->
            <p>
                Inició su distinguida trayectoria en Viña Concha y Toro en 1998, cuando se hizo cargo de la afamada línea Casillero del Diablo. Un año después, sumó a su trabajo otra de las líneas más importantes de la compañía, Marqués de Casa Concha, a la que logró convertir en una marca consistente en cuanto a reconocimientos internacionales, superando siempre la barrera de los 90 puntos, en todos sus productos. 
            </p>
            <p class="special">
                A ﬁnes de 1999 fue designado como Enólogo Jefe de la Bodega de Puente Alto. 
            </p>
            <p>
                La pasión en su trabajo ha deﬁnido un estilo distintivo en él, que le ha impreso a todos los proyectos en los que ha participado. A juicio de la crítica internacional, su mayor logro profesional radica precisamente en este sello con que logra impregnar sus vinos. 
            </p>
            <p>
                La impronta de este enólogo marca también el proyecto super premium de Maycas del Limarí, viña que lidera desde su inicio, en 2005. Vinos únicos, de gran calidad y que han tenido una gran aceptación a nivel mundial.
            </p>
        </div><!--.team__content-->
    </div><!--.team__item-->
    <!--NOTE: Termina Item Team-->
    <!--NOTE: Inicia Item Team-->
    <div class="team__item">
        <div class="team__media" style="background-image: url(assets/team/Javier.jpg);"></div><!--.team__media-->
        <div class="team__content">
            <div class="team--top">
                <h2 class="team__title">Javier Villaroel</h2>
                <h4 class="team__cargo">Enólogo</h4>
            </div><!--.team--top-->
            <p>
                Enólogo de la Universidad Católica de Chile, ingresó a Concha y Toro en el año 2000. Hasta el 2005 trabajó con Enrique Tirado en la bodega de Puente Alto en la elaboración de Don Melchor, trasladándose en 2006 al Valle del Limarí para trabajar junto a Marcelo Papa en el proyecto de Maycas del Limarí. 
            </p>
            <p>
                Su experiencia en vendimias incluye las de Viña Canepa (1998) y Viña Errázuriz (1999) en Chile y la de la Union des Producteurs de Saint- Emilion (1999) en Francia. 
            </p>
            <p class="special">
                El Syrah es su variedad favorita para trabajar. “Es una cepa muy noble, que se adapta de forma excelente a las condiciones del Valle del Limarí”. 
            </p>
            <p>
                Los años de trabajo de Javier en Maycas del Limarí lo han convertido en un apasionando del Valle:
            </p>
            <p>
                “Descubrir día a día su enorme potencial vitivinícola -cuyo límite desconocemos- y experimentar lo auténtico y diferente que es, respecto del resto de los valles vitivinícolas chilenos, es simplemente espectacular”. Gran calidad y que han tenido una gran aceptación a nivel mundial.
            </p>
        </div><!--.team__content-->
    </div><!--.team__item-->
    <!--NOTE: Termina Item Team-->
</section><!--.wrap.team-->
<section class="pregunta">
    <div class="wrap">
        <h1 class="sub-title">Pregúntale a los enólogos</h1>
        <div class="pregunta--container">
            <form action="" class="pregunta--form">
                <div class="input-group">
                    <label for="name">
                        <span>
                            Nombre
                        </span>
                    </label>
                    <input type="text" id="name" name="name">
                </div><!--.input-group-->
                <div class="input-group">
                    <label for="lastname">
                        <span>
                            Apellido
                        </span>
                    </label>
                    <input type="text" id="lastname" name="lastname">
                </div><!--.input-group-->
                <div class="input-group">
                    <label for="usermail">
                        <span>
                            Correo
                        </span>
                    </label>
                    <input type="email" id="usermail" name="usermail">
                </div><!--.input-group-->
                <div class="input-group">
                    <label for="message">
                        <span>
                            Mensaje
                        </span>
                    </label>
                    <textarea name="message" id="message"></textarea>
                </div><!--.input-group-->
                <div class="send-group">
                    <input type="submit" value="Enviar" class="btn btn--border">
                </div><!--.send-group-->
            </form><!--.pregunta--form-->
        </div><!--.pregunta--container-->
    </div><!--.wrap-->
</section><!--.pregunta-->
<section class="wrap center">
    <h1 class="sub-title">Influencia inca</h1>
    <p>
        <strong>
            El Imperio Inca se extendía 5.000 km. desde Cuzco, en Perú, hacia el sur, a lo largo de la Cordillera de Los Andes. El Valle del Limarí pertenecía a lo que denominaban “Reino del Sur” y tenía una gran importancia debido a la extracción de minerales, como cobre, oro y piedras semi-preciosas (en especial la Turquesa, considerada la piedra real), que ahí se realizaba.
        </strong>
    </p>
    <p>
        La influencia de esta civilización aún se percibe en el Valle del Limarí. Las construcciones de piedra de río, propias de la arquitectura Inca, pueden ser encontradas al interior del valle. 
        Maycas en idioma quechua significa “tierras cultivables”, junto al concepto de Inti – el sol – fueron los pilares de esta cultura. Para determinar los tiempos agrícolas, los Incas crearon su famoso calendario solar que ha trascendido hasta el día de hoy.
    </p>
    <p>
        El packaging de las distintas líneas de maycas del limarí rinde tributo a esta poderosa civilización.
    </p>
    <div class="marcas">
        <div class="marcas__item">
            <img src="img/quebrada-seca.png" alt="Titulo">
        </div><!--.marcas__item-->
        <div class="marcas__item">
            <img src="img/san-julian.png" alt="Titulo">
        </div><!--.marcas__item-->
        <div class="marcas__item">
            <img src="img/reserva-especial.png" alt="Titulo">
        </div><!--.marcas__item-->
        <div class="marcas__item">
            <img src="img/sumaq.png" alt="Titulo">
        </div><!--.marcas__item-->
    </div><!--.marcas-->
</section>
<div class="design"></div>
<?php include 'footer.php'; ?>