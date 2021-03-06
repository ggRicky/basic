<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

/* $this->title = 'My Yii Application'; */
$this->title = 'Yii Basic Template Application 2017-12-19 11:41 HRS.';
$asset = app\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;

?>
<!-- Navigation -->
<!-- Open menu button -->
<a id="menu-toggle" href="#" class="btn btn-dark btn-lg btn-toggle"><i class="fa fa-bars"></i></a>

<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <!-- Close menu button -->
        <div class="sidebar-top">
            <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right btn-toggle"><i class="fa fa-times"></i></a>
        </div>
        <!-- CTT mini-logo ribbon -->
        <div class="container-fluid ctt-mini-logo-top">
            <img src="<?=$baseUrl?>/img/ctt-mini-logo_1.jpg" class="pull-left img-responsive" height="42" width="105"/>
        </div>
        <!-- Menu title -->
        <li class="sidebar-brand">
            <a href="#top"></a>
        </li>
        <!-- Content menu -->
        <li>
            <?php echo "<a href='" . Url::to(['site/about']) . "'>Acerca</a>"; ?>
        </li>
        <li>
            <a href="/site/clientes">Clientes</a>
        </li>
        <li>
            <a href="#parallax1">Catálogos</a>
        </li>
        <li>
            <a href="#ctt-portfolio">Inventarios</a>
        </li>
        <li>
            <a href="#services">Proyectos</a>
        </li>
        <li>
            <a href="#parallax1">Reservaciones</a>
        </li>
        <li>
            <a href="#ctt-portfolio">Cotizaciones</a>
        </li>
        <li>
            <a href="#contact">Ayuda</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top">
    <div class="row"> <!-- Bootstrap's row -->
        <div class="col-lg-12"> <!-- Bootstrap's col -->
            <div class="ctt-mask">  <!-- Blue mask over CDMX video -->
                <!-- Video settings to autoplay and infinite loop -->
                <video class="crop-video" poster="<?=$baseUrl?>/img/poster_0.jpg" autoplay loop>
                    <source src="<?=$baseUrl?>/mov/ctt-cdmx.webm" type="video/webm">  <!-- The webm video format is the best for high performance downloads -->
                </video>
            </div>
            <!-- CTT logo to display over the CDMX video with opacity level -->
            <img src="<?=$baseUrl?>/img/ctt-logo_1.png" class="ctt-logo">
        </div>
    </div>
</header>

<!-- CTT about section -->
<section id="about" class="about">
    <div>
        <div class="row text-center">
            <div class="col-lg-12">
                <h2>CTT Web Application v-1.0</h2>
                <p class="lead">Sistema Gestor de Operaciones</p>
                <h2 class="barcode-font">ISC-RGG</h2>
            </div>
        </div>
        <!-- CTT mini-logo -->
        <div class="row">
            <div class="col-lg-12">
                <img src="<?=$baseUrl?>/img/ctt-mini-logo_1.jpg" class="center-block img-responsive" height="42" width="105"/>
            </div>
        </div>
    </div>
</section>

<!-- CTT Operation links -->
<!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
<section id="services" class="ctt-operations bg-primary">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-10 col-lg-offset-1">
                <h2>Operaciones</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="ctt-operations-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-file-movie-o fa-stack-1x text-primary"></i>
                                </span>
                            <h4>
                                <strong>Proyectos</strong>
                            </h4>
                            <hr class="small">
                            <p></p>
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#ctt-modal-info">I n g r e s a r</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ctt-operations-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-calendar fa-stack-1x text-primary"></i>
                                </span>
                            <h4>
                                <strong>Gestión</strong>
                            </h4>
                            <hr class="small">
                            <p></p>
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#ctt-modal-warning">I n g r e s a r</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ctt-operations-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-barcode fa-stack-1x text-primary"></i>
                                </span>
                            <h4>
                                <strong>Operaciones</strong>
                            </h4>
                            <hr class="small">
                            <p></p>
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#ctt-modal-error">I n g r e s a r</a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="ctt-operations-item">
                                <span class="fa-stack fa-4x">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-info fa-stack-1x text-primary"></i>
                                </span>
                            <h4>
                                <strong>Reportes</strong>
                            </h4>
                            <hr class="small">
                            <p></p>
                            <a href="#" class="btn btn-light" data-toggle="modal" data-target="#ctt-modal-success">I n g r e s a r</a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Parallax Efect -->
<section id="parallax1" class="parallax-section" data-stellar-background-ratio="0.5">
    <div class="text-vertical-center">
        <h1></h1>  <!-- Reserved for including text inside the parallax window -->
    </div>
</section>

<!-- CTT Portfolio -->
<section id="ctt-portfolio" class="arri-portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <h2>Nuestro Equipo</h2>
                <hr class="small">
                <div class="row">
                    <div class="col-md-6">
                        <div class="arri-portfolio-item">
                            <a href="#">
                                <img class="img-arri-portfolio img-responsive" src="<?=$baseUrl?>/img/img_1.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="arri-portfolio-item">
                            <a href="#">
                                <img class="img-arri-portfolio img-responsive" src="<?=$baseUrl?>/img/img_2.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="arri-portfolio-item">
                            <a href="#">
                                <img class="img-arri-portfolio img-responsive" src="<?=$baseUrl?>/img/img_3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="arri-portfolio-item">
                            <a href="#">
                                <img class="img-arri-portfolio img-responsive" src="<?=$baseUrl?>/img/img_4.jpg">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row (nested) -->
                <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#ctt-modal-question">R e s e r v a c i o n e s</a>
            </div>
            <!-- /.col-lg-10 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</section>

<!-- Google ribbon -->
<aside class="ctt-map-ribbon bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="ctt-title-spacing">Google Maps</h3>
            </div>
        </div>
    </div>
</aside>

<!-- Google Map  CTT's loction -->
<section id="contact" class="ctt-map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15065.048251249942!2d-99.1300126!3d19.2709666!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1510717183118;output=embed"></iframe>
    <br />
    <div class="col-lg-12" >
        <small>
            <a href="https://www.google.com.mx/maps/@19.2709666,-99.1300126,15z/data=!4m2!7m1!2e1">Ubicación de CTT Exp. & Rentals.</a>
        </small>
    </div>
</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">

                <ul class="list-inline">
                    <li>
                        <img src="<?=$baseUrl?>/img/ctt-logo_2.png" height="128" width="90"/>
                    </li>
                </ul>

                <hr class="small">
                <p>Guadalupe I. Ramírez No. 763<br />Col. Tepepan, Delegación Xochimilco, C.P. 16029</p><p>Ciudad de México, CDMX</p>

                <ul class="list-unstyled">
                    <li><i class="fa fa-phone fa-fw"></i> 01 55 5676 1113</li>
                    <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">contacto@cttrentals.com</a>
                    </li>
                </ul>

                <br />

                <ul class="list-inline">
                    <li>
                        <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram fa-fw fa-3x"></i></a>
                    </li>
                </ul>

                <!-- Credits layer -->
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center tsr-content">
                        <hr class="small">
                        <p class="text-muted"><img src="<?=$baseUrl?>/img/yii2_logo.png" height="37" width="120"/></p>
                        <p class="text-muted">Copyright &copy; 2017 <br/>TSR Development Software</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Blue ribbon decoration -->
    <section class="ctt-section bg-primary">
        <div class="col-lg-12">
            <div class="row"></div>
        </div>
    </section>

</footer>

<!-- Modal Info -->
<div id="ctt-modal-info" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content modal-backdrop">

            <!-- Modal Header -->
            <div class="modal-shadow-effect modal-header-water-mark">
                <div class="modal-header modal-header-config ctt-modal-header-info">
                    <div class="row">
                        <!--
                             ctt-modal-header-info        glyphicon-info-sign
                             ctt-modal-header-success     glyphicon-ok-sign
                             ctt-modal-header-question    glyphicon-question-sign
                             ctt-modal-header-warning     glyphicon-warning-sign
                             ctt-modal-header-error       glyphicon-exclamation-sign
                        -->
                        <div class="col-sm-1"><span class="glyphicon glyphicon-info-sign"></span></div>
                        <div class="col-sm-7"><h4 class="modal-title">Información</h4></div>
                        <div class="col-sm-4"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                    </div>
                </div>

                <!-- Modal Content -->
                <div class="modal-body modal-body-config">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies id lorem in bibendum. Phasellus leo diam, posuere non dolor sed, cursus ultricies mi. Praesent malesuada a urna vitae suscipit. Vestibulum ullamcorper leo dolor, quis faucibus arcu euismod et. Curabitur sed diam interdum, cursus dui a, elementum dui. Curabitur eget eros arcu. Duis lobortis, neque ac maximus ornare, erat lectus consectetur neque, nec egestas lectus dui vel eros.</p>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer modal-footer-config">
                    <div class="row">
                        <div class="col-sm-6"><img align="left" src="<?=$baseUrl?>/img/ctt-mini-logo_1.jpg" height="42" width="105"/></div>
                        <div class="col-sm-6"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Modal Warning -->
<div id="ctt-modal-warning" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content modal-backdrop">

            <!-- Modal Header -->
            <div class="modal-shadow-effect modal-header-water-mark">
                <div class="modal-header modal-header-config ctt-modal-header-warning">
                    <div class="row">
                        <!--
                             ctt-modal-header-info        glyphicon-info-sign
                             ctt-modal-header-success     glyphicon-ok-sign
                             ctt-modal-header-question    glyphicon-question-sign
                             ctt-modal-header-warning     glyphicon-warning-sign
                             ctt-modal-header-error       glyphicon-exclamation-sign
                        -->
                        <div class="col-sm-1"><span class="glyphicon glyphicon-warning-sign"></span></div>
                        <div class="col-sm-7"><h4 class="modal-title">Advertencia</h4></div>
                        <div class="col-sm-4"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                    </div>
                </div>

                <!-- Modal Content -->
                <div class="modal-body modal-body-config">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies id lorem in bibendum. Phasellus leo diam, posuere non dolor sed, cursus ultricies mi. Praesent malesuada a urna vitae suscipit. Vestibulum ullamcorper leo dolor, quis faucibus arcu euismod et. Curabitur sed diam interdum, cursus dui a, elementum dui. Curabitur eget eros arcu. Duis lobortis, neque ac maximus ornare, erat lectus consectetur neque, nec egestas lectus dui vel eros.</p>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer modal-footer-config">
                    <div class="row">
                        <div class="col-sm-6"><img align="left" src="<?=$baseUrl?>/img/ctt-mini-logo_1.jpg" height="42" width="105"/></div>
                        <div class="col-sm-6"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Modal Error -->
<div id="ctt-modal-error" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content modal-backdrop">

            <!-- Modal Header -->
            <div class="modal-shadow-effect modal-header-water-mark">
                <div class="modal-header modal-header-config ctt-modal-header-error">
                    <div class="row">
                        <!--
                             ctt-modal-header-info        glyphicon-info-sign
                             ctt-modal-header-success     glyphicon-ok-sign
                             ctt-modal-header-question    glyphicon-question-sign
                             ctt-modal-header-warning     glyphicon-warning-sign
                             ctt-modal-header-error       glyphicon-exclamation-sign
                        -->
                        <div class="col-sm-1"><span class="glyphicon glyphicon-exclamation-sign"></span></div>
                        <div class="col-sm-7"><h4 class="modal-title">Error</h4></div>
                        <div class="col-sm-4"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                    </div>
                </div>

                <!-- Modal Content -->
                <div class="modal-body modal-body-config">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies id lorem in bibendum. Phasellus leo diam, posuere non dolor sed, cursus ultricies mi. Praesent malesuada a urna vitae suscipit. Vestibulum ullamcorper leo dolor, quis faucibus arcu euismod et. Curabitur sed diam interdum, cursus dui a, elementum dui. Curabitur eget eros arcu. Duis lobortis, neque ac maximus ornare, erat lectus consectetur neque, nec egestas lectus dui vel eros.</p>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer modal-footer-config">
                    <div class="row">
                        <div class="col-sm-6"><img align="left" src="<?=$baseUrl?>/img/ctt-mini-logo_1.jpg" height="42" width="105"/></div>
                        <div class="col-sm-6"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Modal Success -->
<div id="ctt-modal-success" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content modal-backdrop">

            <!-- Modal Header -->
            <div class="modal-shadow-effect modal-header-water-mark">
                <div class="modal-header modal-header-config ctt-modal-header-success">
                    <div class="row">
                        <!--
                             ctt-modal-header-info        glyphicon-info-sign
                             ctt-modal-header-success     glyphicon-ok-sign
                             ctt-modal-header-question    glyphicon-question-sign
                             ctt-modal-header-warning     glyphicon-warning-sign
                             ctt-modal-header-error       glyphicon-exclamation-sign
                        -->
                        <div class="col-sm-1"><span class="glyphicon glyphicon-ok-sign"></span></div>
                        <div class="col-sm-7"><h4 class="modal-title">Éxito</h4></div>
                        <div class="col-sm-4"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                    </div>
                </div>

                <!-- Modal Content -->
                <div class="modal-body modal-body-config">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies id lorem in bibendum. Phasellus leo diam, posuere non dolor sed, cursus ultricies mi. Praesent malesuada a urna vitae suscipit. Vestibulum ullamcorper leo dolor, quis faucibus arcu euismod et. Curabitur sed diam interdum, cursus dui a, elementum dui. Curabitur eget eros arcu. Duis lobortis, neque ac maximus ornare, erat lectus consectetur neque, nec egestas lectus dui vel eros.</p>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer modal-footer-config">
                    <div class="row">
                        <div class="col-sm-6"><img align="left" src="<?=$baseUrl?>/img/ctt-mini-logo_1.jpg" height="42" width="105"/></div>
                        <div class="col-sm-6"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- Modal Error -->
<div id="ctt-modal-question" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content modal-backdrop">

            <!-- Modal Header -->
            <div class="modal-shadow-effect modal-header-water-mark">
                <div class="modal-header modal-header-config ctt-modal-header-question">
                    <div class="row">
                        <!--
                             ctt-modal-header-info        glyphicon-info-sign
                             ctt-modal-header-success     glyphicon-ok-sign
                             ctt-modal-header-question    glyphicon-question-sign
                             ctt-modal-header-warning     glyphicon-warning-sign
                             ctt-modal-header-error       glyphicon-exclamation-sign
                        -->
                        <div class="col-sm-1"><span class="glyphicon glyphicon-question-sign"></span></div>
                        <div class="col-sm-7"><h4 class="modal-title">Pregunta</h4></div>
                        <div class="col-sm-4"><button type="button" class="close" data-dismiss="modal">&times;</button></div>
                    </div>
                </div>

                <!-- Modal Content -->
                <div class="modal-body modal-body-config">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies id lorem in bibendum. Phasellus leo diam, posuere non dolor sed, cursus ultricies mi. Praesent malesuada a urna vitae suscipit. Vestibulum ullamcorper leo dolor, quis faucibus arcu euismod et. Curabitur sed diam interdum, cursus dui a, elementum dui. Curabitur eget eros arcu. Duis lobortis, neque ac maximus ornare, erat lectus consectetur neque, nec egestas lectus dui vel eros.</p>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer modal-footer-config">
                    <div class="row">
                        <div class="col-sm-6"><img align="left" src="<?=$baseUrl?>/img/ctt-mini-logo_1.jpg" height="42" width="105"/></div>
                        <div class="col-sm-6"><button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button></div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
