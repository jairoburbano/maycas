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
$page = '404';
$subpage = '';
$type = 'page';
$template = '';
$title = '404';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="error-page">
   <img src="assets/bg1-home.jpg" alt="Titulo" class="image-404">
    <div class="container-404">
        <h1 class="sub-title">Error 404</h1>
        <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit</strong></p>
        <a href="index.php" title="titulo" class="btn btn--border">Volver</a>
    </div><!--.container-404-->
</div><!--.error-page-->
<?php include 'footer.php'; ?>