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

		<!--Centros-->
        <div class="centros-atencion section-centros">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-lg-offset-3">
                        <div class="title">
                            <h1>Centros de atención</h1>
                            <p class="border-grey">¡Buscá tu centro de atención de Europie más cercano y visitanos!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1">
                            <div class="col-lg-12 centro">
                                <a href="http://www.kynet.com.ar" target="blank">R</a>
                                <h4>Kynet Recoleta</h4>
                                <div class="info">
                                    <div class="info-element">
                                        <img src="img/tel.png"/>
                                        <p>(011) 4806 - 7753</p>
                                    </div>
                                    <div class="info-element">
                                        <img src="img/mail.png"/>
                                        <p>recoleta@kynet.com.ar</p>
                                    </div>
                                    <div class="info-element">
                                        <img src="img/point.png"/>
                                        <p>Pueyrredón 2446, Recoleta</p>
                                    </div>
                                </div>
                            </div>
			<div class="clearfix"></div>
                            <div class="col-lg-12 centro">
                                <a href="https://www.instagram.com/tspkinesio/" target="blank">T</a>
                                <h4>TSP</h4>
                                <div class="info">
                                    <div class="info-element">
                                        <img src="img/tel.png"/>
                                        <p>(011) 4631-3424</p>
                                    </div>
                                    <div class="info-element">
                                        <img src="img/mail.png"/>
                                        <p>tspkinesio@gmail.com</p>
                                    </div>
                                    <div class="info-element">
                                        <img src="img/point.png"/>
                                        <p>Fray Luis Beltrán 72 2º D, Caballito</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 centro">
                                <a href="http://www.kynet.com.ar" target="blank">P</a>
                                <h4>Kynet Pilar</h4>
                                <div class="info">
                                    <div class="info-element">
                                        <img src="img/tel.png"/>
                                        <p>(0250) 464 - 5362</p>
                                    </div>
                                    <div class="info-element">
                                        <img src="img/mail.png"/>
                                        <p>pilar@kynet.com.ar</p>
                                    </div>
                                    <div class="info-element">
                                        <img src="img/point.png"/>
                                        <p>Panamericana KM 49.5, Pilar</p>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 centro">
                                <a href="http://www.kynet.com.ar" target="blank">N</a>
                                <h4>Kynet Nordelta</h4>
                                <div class="info">
                                    <div class="info-element">
                                        <img src="img/tel.png"/>
                                        <p>(011) 4871 - 0494</p>
                                    </div>
                                    <div class="info-element">
                                        <img src="img/mail.png"/>
                                        <p>nordelta@kynet.com.ar</p>
                                    </div>
                                    <div class="info-element">
                                        <img src="img/point.png"/>
                                        <p>Calle del Caminante 20, 2º 215, Nordelta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/Fin Centros-->

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
