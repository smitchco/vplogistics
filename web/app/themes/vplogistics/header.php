<?php
/**
 * The header for our theme.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script>document.documentElement.className+=' js-enabled';</script>
<?php #get_template_part('inc/js/webfontloader.js'); ?>
<?php #get_template_part('inc/js/lazysizes.js'); ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="header py-5" role="banner">
    <div class="container-fluid">
      <div class="row">
        <div class="col-auto">
          <div class="header-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <div class="svg svg--logo">
              <?php include( 'inc/svg/logo-horizontal.svg' ); ?>
              </div>
            </a>
          </div>
        </div>
        <div class="col-auto ml-auto">
          <nav class="header__nav" role="navigation">
            <?php wp_nav_menu( array(
              'container' => false,
              'menu_class' => 'header__menu',
              'theme_location' => 'header'
            ) ); ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
