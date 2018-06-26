<?php
/**
 * @package	Greenkey4
 * @copyright	Copyright (C) 2018, Inc. All rights reserved.
 */
defined('_JEXEC') or die;

JHtml::_('jquery.framework');
JHtml::_('jquery.ui');
JHtml::_('behavior.framework');

//JHtml::script('https://maps.googleapis.com/maps/api/js?v=3.exp&language=ru');
//JHtml::script('https://code.jquery.com/jquery-3.3.1.min.js');
//JHtml::script('http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js');
//JHtml::script('https://code.jquery.com/ui/1.12.1/jquery-ui.min.js');
//JHtml::script('https://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js');
//JHtml::script('templates/' . $this->template . '/code/jquery.easypiechart.js');
//JHtml::script('templates/' . $this->template . '/code/jquery.backstretch.min.js');
//JHtml::script('templates/' . $this->template . '/code/jquery.sequence-min.js');
//JHtml::script('templates/' . $this->template . '/code/okvideo.min.js');
//JHtml::script('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js');
//JHtml::script('https://npmcdn.com/headroom.js@0.9.4/dist/headroom.min.js');
//JHtml::script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js');
//JHtml::script('templates/' . $this->template . '/vendor/bootstrap4/js/bootstrap.min.js');
JHtml::script('templates/' . $this->template . '/code/jquery.touchSwipe.min.js');
//JHtml::script('http://maps.google.com/maps/api/js?sensor=true');
//JHtml::script('templates/' . $this->template . '/code/gmaps.js');

JHtml::script('templates/' . $this->template . '/code/template.js');

//JHtml::stylesheet('../media/jui/css/chosen.css');
//JHtml::stylesheet('templates/' . $this->template . '/style/reset.css');
//JHtml::stylesheet('templates/'.$this->template.'/style/normalize.css');
//JHtml::stylesheet('http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.css');
//JHtml::stylesheet('https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css');
//JHtml::stylesheet('templates/' . $this->template . '/code/prettyPhoto/css/prettyPhoto.css');
//JHtml::stylesheet('templates/' . $this->template . '/style/sidebar.css');
//JHtml::stylesheet('templates/' . $this->template . '/style/animate.css');
//JHtml::stylesheet('templates/' . $this->template . '/fonts/fontawesome5/css/fontawesome.css');
//JHtml::stylesheet('templates/' . $this->template . '/vendor/bootstrap4/css/bootstrap.min.css');
JHtml::stylesheet('templates/' . $this->template . '/style/template.css');
JHtml::stylesheet('templates/' . $this->template . '/style/variables.css');


$app = JFactory::getApplication();
$user = JFactory::getUser();

// Output as HTML5
$this->setHtml5(true);

$sitename = $app->get('sitename');

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option = $app->input->getCmd('option', '');
$view = $app->input->getCmd('view', '');
$layout = $app->input->getCmd('layout', '');
$task = $app->input->getCmd('task', '');
$itemid = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

$has_left = ($this->countModules('left'));
$has_right = ($this->countModules('right'));
$center_class = "col-12 col-lg-8 col-xl-6";
if ((!$has_left) && ($has_right)) {
    $center_class = "col-12 col-lg-8 col-xl-9";
}
if (($has_left) && (!$has_right)) {
    $center_class = "col-12 col-lg-12 col-xl-9";
}
if ((!$has_left) && (!$has_right)) {
    $center_class = "col-12 col-lg-12 col-xl-12";
}


// Logo file or site title param
if ($params->get('logoFile')) {
    $logo = '<img class="logo" src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
} else {
    $logo = '<img class="logo" src="/images/logo/logo_small.png" />';
}
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
    <head>

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="templates/<?php echo $this->template ?>/media/favicons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="templates/<?php echo $this->template ?>/media/favicons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="templates/<?php echo $this->template ?>/media/favicons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="templates/<?php echo $this->template ?>/media/favicons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="templates/<?php echo $this->template ?>/media/favicons/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="templates/<?php echo $this->template ?>/media/favicons/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="templates/<?php echo $this->template ?>/media/favicons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="templates/<?php echo $this->template ?>/media/favicons/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="templates/<?php echo $this->template ?>/media/favicons/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="templates/<?php echo $this->template ?>/media/favicons/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="templates/<?php echo $this->template ?>/media/favicons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="templates/<?php echo $this->template ?>/media/favicons/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="templates/<?php echo $this->template ?>/media/favicons/favicon-128.png" sizes="128x128" />
        <meta name="application-name" content="&nbsp;"/>
        <meta name="msapplication-TileColor" content="#FFFFFF" />
        <meta name="msapplication-TileImage" content="templates/<?php echo $this->template ?>/media/favicons/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="templates/<?php echo $this->template ?>/media/favicons/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="templates/<?php echo $this->template ?>/media/favicons/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="templates/<?php echo $this->template ?>/media/favicons/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="templates/<?php echo $this->template ?>/media/favicons/mstile-310x310.png" />

        <!-- Google Webfonts
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,100,100italic,200,300,300italic,400italic,500,700,900' rel='stylesheet' type='text/css'> -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Работает почему то только тут -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <jdoc:include type="head" />
</head>

<body id="page-top">
    <button id="offcanvas" type="button" class="btn btn-info fa-2x offcanvas" type="button" data-toggle="offside">
        <!--<img src="images/logo/icon_white.png" />-->
        <i class="fas fa-bars"></i>
    </button>

    <div id="page-container" class="container-fluid">
        <div class="row">

            <aside class="col-6 col-md-4 col-lg-3 offside">
                <a href="/"><?php echo $logo; ?></a>
                <jdoc:include type="modules" name="sidebar" style="no" />
            </aside>

            <div class="col-12 col-md-8 col-lg-9 main-flexbox">

                <!-- HEADER -->
                <header class="row">
                    <div class="col-1 col-sm-4">
                        <jdoc:include type="modules" name="sub-header-1" style="no" />
                    </div>
                    <div class="col-11 col-sm-8">
                        <jdoc:include type="modules" name="sub-header-2" style="no" />
                    </div>
                </header>

                <?php if ($this->countModules('top')) : ?>
                <div class="row">
                    <div class="col">
                        <jdoc:include type="modules" name="top" style="no" />
                    </div>
                </div>
                <?php endif; ?>

                <!-- BODY -->
                <main class="row">
                    <?php if ($has_left): ?>
                    <div class="col-12 <?php echo $has_right ? "col-sm-12" : "col-sm-4"; ?> col-md-12 <?php echo $has_right ? "col-lg-12" : "col-lg-4"; ?> col-xl-3">
                        <jdoc:include type="modules" name="left" style="no" />
                    </div>
                    <?php endif; ?>
                    <div class="col-12 col-sm  col-md col-lg  col-xl">
                        <jdoc:include type="modules" name="center-header" style="no" />
                        <jdoc:include type="message" />
                        <jdoc:include type="component" />
                        <jdoc:include type="modules" name="center-footer" style="col" />
                    </div>
                    <?php if ($has_right): ?>
                    <div class="col-12 col-sm-4  col-md-12 col-lg-4  col-xl-3">
                        <jdoc:include type="modules" name="right" style="no" />
                    </div>
                    <?php endif; ?>
                </main>

                <?php if ($this->countModules('bottom')) : ?>
                <div class="row">
                    <div class="col">
                        <jdoc:include type="modules" name="bottom" style="no" />
                    </div>
                </div>
                <?php endif; ?>

                <!-- FOOTER -->
                <footer class="row">
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                        <jdoc:include type="modules" name="sub-footer-1" style="html5" />
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                        <jdoc:include type="modules" name="sub-footer-2" style="html5" />
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                        <jdoc:include type="modules" name="sub-footer-3" style="html5" />
                    </div>
                    <div class="col-12 col-sm-6 col-lg-6 col-xl-3">
                        <jdoc:include type="modules" name="sub-footer-4" style="html5" />
                    </div>
                </footer>


            </div>
        </div>
    </div>

</body>

</html>
<!--
0) Эскиз сайта, можно на бумаге
1) Формирую проект, подключаю библиотеки: бутстрап, джквери, фонты, фреймворки?
1) Использование автомата подключения - composer? и nodejs
1) Использование препроцессора CSS - SCSS
2) Создаю необходимые папки, языковые файлы шаблона Joomla, установочный XML
2) Нарезаю ряд базовых картинок (лого, иконки) и делаю favicon
2) Делаю дистрибутив и устанавливаю в систему, дальнейшая работу веду уже в ней
3) Верстка макета на html-css
3) Расстановка структурных тегов HTML5
3) Вставка кодов позиций Joomla
3) Копирование в отдельный проект, с использованием VCS
3) Настройка софтлинков в установленный шаблон в системе
3) Использование системы контроля версии, и библиотеки стандартных шаблонов
-->