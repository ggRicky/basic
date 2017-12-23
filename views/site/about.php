<?php

use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = 'About';
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
            <a href="#top">Acerca</a>
        </li>
        <!-- Content menu -->
        <li>
            <?php echo "<a href='" . Url::to(['site/index']) . "'>Regresar</a>"; ?>
        </li>
        <li>
            <a href="#">Ayuda</a>
        </li>
    </ul>
</nav>

<!-- Header -->
<header id="top">
    <div class="row"> <!-- Bootstrap's row -->
        <div class="col-lg-12"> <!-- Bootstrap's col -->
            <!-- Parallax Efect -->
            <div id="parallax2" class="parallax-section" data-stellar-background-ratio="0.5">
                <div class="row"></div>
            </div>
            <!-- CTT logo to display over the parallax efect with opacity level -->
            <img src="<?=$baseUrl?>/img/ctt-logo_1.png" class="ctt-logo">
        </div>
    </div>
</header>

<!-- Blue ribbon decoration -->
<section class="ctt-section bg-primary">
    <div class="col-lg-12">
        <div class="row"></div>
    </div>
</section>

<!-- Yii2 Content -->
<section id="yii2" class="yii2-page">

    <!-- Main menu return -->
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 text-center">
            <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#cttModal">I n f o r m a c i ó n</a>
        </div>
    </div>

    <!-- Yii2 Title layout -->
    <div class="row">
        <div class="col-lg-10 yii2-header">
            <p>Acerca</p>
        </div>
    </div>

    <!-- Yii2 complementary description -->
    <div class="row">
        <div class="col-lg-10 text-info yii2-description">
            <p>CTT Web Application v-1.0</p>
        </div>
    </div>

    <!-- Yii2 work area -->
    <div class="row">
        <div class="col-lg-12 text-justify yii2-content">
            <p>Contenido</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ultricies id lorem in bibendum. Phasellus leo diam, posuere non dolor sed, cursus ultricies mi. Praesent malesuada a urna vitae suscipit. Vestibulum ullamcorper leo dolor, quis faucibus arcu euismod et. Curabitur sed diam interdum, cursus dui a, elementum dui. Curabitur eget eros arcu. Duis lobortis, neque ac maximus ornare, erat lectus consectetur neque, nec egestas lectus dui vel eros. In orci lorem, ultricies faucibus lectus in, volutpat mattis libero. Ut sit amet ante at augue lobortis elementum. Cras turpis lacus, pellentesque vitae lacinia nec, tempus vel nisl. Nullam ornare luctus odio, dapibus convallis eros vestibulum in. Quisque id libero eleifend nibh suscipit convallis. Nam eu aliquam mauris, ut semper est. </p>
            <p>Sed et eros luctus, convallis sem vitae, pharetra mi. Praesent gravida vehicula dolor non semper. Quisque et sagittis mauris. Quisque id nibh nec odio venenatis aliquam id vel neque. Etiam lacinia maximus nisi eu suscipit. Vestibulum eu suscipit arcu, et mollis enim. Vestibulum a odio ac ante hendrerit pharetra. Suspendisse sollicitudin at risus nec feugiat. Phasellus in lacus quis nulla feugiat scelerisque. Aliquam aliquet lacinia semper. Suspendisse at dui consectetur, elementum est cursus, tristique mauris. Aenean libero massa, pellentesque et mattis ac, pulvinar id magna. Donec ut dapibus velit, quis placerat tellus. Fusce velit felis, feugiat eget vestibulum nec, ornare sed purus. Nulla facilisi. </p>
            <p>Quisque iaculis sapien eget massa fringilla, bibendum tristique justo tristique. Quisque congue sit amet nunc sed condimentum. Integer et enim eros. Duis sed quam in ipsum vestibulum gravida. Nulla ornare odio non egestas malesuada. Nunc quis urna id augue scelerisque vehicula. Etiam imperdiet porta finibus. Curabitur mollis blandit dui eu ullamcorper. Ut sed est ullamcorper, maximus erat sed, efficitur erat. Donec dolor augue, euismod vitae tristique sit amet, maximus sed mi. Pellentesque porttitor non lorem id malesuada. </p>
            <p>Cras quis urna posuere, faucibus leo at, rhoncus mi. Duis a rhoncus nulla. Integer semper turpis dictum massa pulvinar placerat. In sit amet dictum elit. Proin lobortis diam id elit gravida egestas. Curabitur dapibus auctor lacus et gravida. Aliquam eleifend congue libero, at vulputate leo finibus non. Ut luctus lacus quis est luctus ultrices. </p>
            <p>Pellentesque nec mauris nisl. Morbi auctor orci dignissim orci hendrerit pretium. Quisque mattis posuere orci, ut aliquam ante rhoncus id. Cras tincidunt vulputate nisl id eleifend. Fusce turpis tortor, pharetra ac turpis accumsan, sodales tempus mi. Curabitur vestibulum, neque et tristique finibus, felis lorem elementum risus, non rhoncus ipsum mi eget mauris. Suspendisse vel blandit lacus, a pellentesque turpis. Curabitur dapibus, nisi at eleifend feugiat, ipsum dui vehicula nisl, at vulputate velit massa quis orci. Phasellus eget finibus arcu. Etiam lorem sapien, dignissim ut ultrices id, pretium nec lorem. Quisque pretium laoreet rutrum. Ut et venenatis enim, non laoreet lacus. In eu consequat nibh. Aliquam sit amet efficitur augue. </p>
        </div>
    </div>

</section>

<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 text-center">
                <!-- CTT mini logo -->
                <div class="col-lg-12">
                    <img src="<?=$baseUrl?>/img/ctt-mini-logo_1.jpg" class="center-block img-responsive" height="42" width="105"/>
                </div>

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

<!-- Modal -->
<div id="cttModal" class="modal fade" role="dialog">
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
                        <div class="col-sm-7"><h4 class="modal-title">Importante</h4></div>
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