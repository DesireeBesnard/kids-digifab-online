<?php
/**
 * Header du thème, contient tout le header
 * La partie suivante est content.php
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<title>Plateforme KDO</title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	
		<header id="masthead" class="container-fluid p-0">
		<nav class="navbar navbar-expand-lg navbar-light bg-white">
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
                        'menu_class'     => 'navbar-nav d-flex justify-content-around montserrat font-weight-bold w-100 navlinks-weight',
                        'walker'         => new Bootstrap_NavWalker(),
                        'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
                    ));
                    ?>
                </div>
            </div>
        </nav>
		</header><!-- #masthead -->

	<div id="content" class="site-content">
