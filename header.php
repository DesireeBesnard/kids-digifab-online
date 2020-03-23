<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Plateforme KDO</title>

    <link href="<?php bloginfo('template_directory'); ?>/css/main.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <header class="container-fluid pl-0 pr-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-white pt-3 pb-3">
            <div class="col-4">
                <img class="logo-digifab img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/digifab_logo.png" alt="logo de Digifab">
                <img class="ml-1 mr-1 header-social-network img-fluid" src="<?php echo get_template_directory_uri() ; ?>/assets/facebook-footer-blue.png" alt="logo de facebook">
                <img class="header-social-network img-fluid" src="<?php echo get_template_directory_uri() ; ?>/assets/youtubeblue.png" alt="logo de facebook">
            </div>

            <div class="col-8">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content" aria-controls="navbar-content" aria-expanded="false" aria-label="<?php esc_html_e('Toggle Navigation', 'theme-textdomain'); ?>">
                    <span class="navbar-toggler-icon"></i></span>
                </button>

                <div class="position-relative collapse navbar-collapse ml-auto" id="navbar-content">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'Primary',
                        'container'      => false,
                        'depth'          => 2,
                        'menu_class'     => 'navbar-nav position-absolute d-flex justify-content-around montserrat font-weight-bold w-100 navlinks-weight underline-menu',
                        'walker'         => new Bootstrap_NavWalker(),
                        'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
                    ));
                    ?>
                </div>
            </div>
        </nav>
    </header>