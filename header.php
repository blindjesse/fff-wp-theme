<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Playball" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="container my-0 p-0 site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<header id="masthead" class="site-header navbar-static-top m-0 justify-content-center <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">
        <div class="container p-0">
            <div class="intro">
                <div class="row justify-content-center m-0" id="ffotm">
<div class="col p-0">
<a href="/"><img src="https://flagfolkfest.org/wp-content/uploads/2019/03/fff-banner-full.jpg"> </a>
</div>
                </div>

            </div>
            <nav class="navbar navbar-expand-xl border-bottom border-dark pb-1 pt-0 navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-center',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
	</header><!-- #masthead -->
    <?php if(is_front_page()): ?>
      <div id="carousel" class='carousel slide' data-ride='carousel'>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo wp_upload_dir()['baseurl'] . "/2019/02/IMG_5180.png"; ?>">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo wp_upload_dir()['baseurl'] . "/2019/02/IMG_5152.png"; ?>">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo wp_upload_dir()['baseurl'] . "/2019/02/IMG_5087.png"; ?>">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo wp_upload_dir()['baseurl'] . "/2019/02/IMG_5136.png"; ?>">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo wp_upload_dir()['baseurl'] . "/2019/02/IMG_5126.png"; ?>">
          </div>
        </div>
      </div>
    <?php endif; ?>
	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>
