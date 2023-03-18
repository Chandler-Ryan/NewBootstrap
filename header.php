<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title>
        <?= wp_title( '', false ); ?>
    </title>

    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-158604545-1');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class( 'class-name' ); ?>>

    <div id="nb" class="blog-masthead w-100">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
					<div class="menu-item">
                    	<img src="<?= get_template_directory_uri(); ?>/img/WhiteLogo.png" height="45px" />
						<a title="<?= get_bloginfo( 'name' )?> " href="/" class="nav-link home"><?= get_bloginfo( 'name' )?></a>
					</div>

                    <?php
               wp_nav_menu( array(
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'container'         => 'div',
                  'container_class'   => 'collapse navbar-collapse',
                  'container_id'      => 'bs-example-navbar-collapse-1',
                  'menu_class'        => 'nav navbar-nav mx-auto menu-menu justify-content-around',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new bootstrap_5_wp_nav_menu_walker(),
               ) );
               ?>
                </div>
            </nav>
        </div>
    </div>

