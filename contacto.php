<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Europie Buenos Aires</title>
        <?php include_once('inc_head.php') ?>
    </head>
    <body>
		<!--Header-->
        <?php include_once('inc_header.php') ?>
        <!--/Fin Header-->	
        <hr>		
		<!--Contacto-->
        <div class="container">
            <div class="form-contacto">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="title">
                            <h1>Contactanos</h1>
                            <p class="border-grey">No hay duda de que tenés un montón de preguntas sobre nuestros servicios. Entrá en contacto con nosotros, vamos a estar más que contentos de responder cualquier consulta que tengas.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form name="contactForm" id="contactForm" action="" method="POST">
                            <div class="form-group">
                                <label for="name">Nombre y apellido
                                    <span>*</span>
                                </label>
                                <input type="name" class="form-control" id="name" name="name" required placeholder="Ingresá nombre y apellido">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefono</label>
                                <input type="phone" class="form-control" id="phone" name="phone" required placeholder="Ingresá tu teléfono">
                            </div>
                            <div class="form-group">
                                <label for="mail">E-mail
                                    <span>*</span>
                                </label>
                                <input type="email" class="form-control" id="mail" name="mail" required placeholder="Ingresá tu e-mail">
                            </div>
                            <div class="form-group">
                                <label for="message">Consulta
                                    <span>*</span>
                                </label>
                                <textarea class="form-control" id="message" name="message" required placeholder="Hacenos tu consulta" rows="3"></textarea>
                            </div>
                            <label class="campos-obligatorios"><span>*</span>Campos obligatorios</label>
                            <button type="submit" class="btn-europie">Enviar</button>
                        </form>
                    </div>
                    <div class="col-lg-6 social">
                        <p>¡Recordá que también podés contactarnos a través de Facebook y enterarte todas nuestras novedades, promociones y descuentos!</p>
                        <div class="fb-grande">
                            <div class="fb-page" data-href="https://www.facebook.com/EuropieBuenosAires/?fref=ts" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false">
                                <blockquote cite="https://www.facebook.com/EuropieBuenosAires/?fref=ts" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/EuropieBuenosAires/?fref=ts">Europie Buenos Aires</a>
                                </blockquote>
                            </div>
                        </div>
                        <div class="fb-chico">
                            <div class="fb-page" data-href="https://www.facebook.com/EuropieBuenosAires/?fref=ts" data-width="275" data-small-header="true" data-adapt-container-width="false" data-hide-cover="false" data-show-facepile="false">
                                <blockquote cite="https://www.facebook.com/EuropieBuenosAires/?fref=ts" class="fb-xfbml-parse-ignore">
                                    <a href="https://www.facebook.com/EuropieBuenosAires/?fref=ts">Europie Buenos Aires</a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Fin Contacto-->
		<hr>
		<!--Footer-->
        <?php include_once('inc_footer.php') ?>
        <!--/Fin Footer-->
        <?php include_once('inc_script.php') ?>
        <div id="fb-root"></div>
        <script>
            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
                fjs.parentNode.insertBefore(js, fjs);
            }
            (document, 'script', 'facebook-jssdk'));
        </script>
    </body>
</html>