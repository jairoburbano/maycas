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
$page = 'contact';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Contacto';
$subpage_title = ' ';
include 'header.php';  ?>
<div class="wrap contacto">
    <h1 class="sub-title">Contacto</h1>
    <div class="contacto__container">
        <form action="" class="contacto__form">
            <div class="column">
                <div class="input-group">
                    <label for="name">Nombre</label>
                    <input type="text" id="name" name="name">
                </div><!--.input-group-->
                <div class="input-group">
                    <label for="country">Pais</label>
                    <div class="style-select">
                        <select name="country" id="country">
                            <option value="default">Selecciona un pais</option>
                            <option value="Chile">Chile</option>
                        </select>
                    </div>
                </div><!--.input-group-->
            </div><!--.column-->
            <div class="column">
                <div class="input-group">
                    <label for="mail">Mail</label>
                    <input type="email" id="mail" name="mail">
                </div><!--.input-group-->
                <div class="input-group">
                    <label for="message">Comentario</label>
                    <textarea name="message" id="message"></textarea>
                </div><!--.input-group-->
                <div class="send-group">
                    <input type="submit" class="btn btn--border" value="Enviar">
                </div>
            </div><!--.column-->
            </div>
        </form><!--.contacto__form-->
    </div><!--.contacto__container-->
</div><!--.wrap.contacto-->
<div class="design especial"></div>
<?php include 'footer.php'; ?>