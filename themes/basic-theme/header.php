<!doctype html>
<html lang="he_Il" style="direction: rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Basic Site</title>

    <?php wp_head(); ?>

    <script id="__bs_script__">//<![CDATA[
        document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.17.3'><\/script>".replace("HOST", location.hostname));
        //]]></script>
</head>

<!-- We load tht AOS animation -->
<script>
    jQuery(function() {
        AOS.init();
    });
</script>
<body>

<header id="sticky-header" class="w-100 pos-t-0 pos-l-0 z-index-10 d-flex justify-content-center header-shadow">
    <div class="container-fluid">
        <div class="row d-flex menu-wrapper justify-content-center">
            <div class="col-md-8 col-xs-12 align-self-center">
                <div class="row">
                    <button class="hamburger js-hamburger hamburger--spring d-md-none" type="button">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>

                    <div class="col-auto col-md-8">
                      <div class="row">
                          <nav class="primary-menu">
                              <?php
                              wp_nav_menu(array(
                                  'theme_location' => 'primary_menu',
                                  'container' => false,
                                  'depth' => 0,
                                  //'walker'         => new SogoToolbarWalker()
                              ));
                              ?>
                          </nav>
                      </div>
                    </div>
                    <div class="col-9 col-md-4">
                        <div class="d-md-block text-left">
                            <a href="<?php echo site_url( '/' ) ?>">
                            <?php echo wp_get_attachment_image(get_field('general_main_logo', 'option'), 'full', false, array('class' => 'img-fluid')) ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    (function ($) {
        'use strict';
        $(document).ready(function () {
            $('.js-hamburger').on('click', function () {
                $(this).toggleClass('is-active');
                $('.primary-menu').toggleClass('is-active')
            });
        });
    })(jQuery);
</script>

