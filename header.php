<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and start of the <body> section
 *
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

  <header class="page-header container">
      <a href="index.html" class="page-header__logo">
        <img src="<?php echo the_field('logo', 'options')?>" alt="" />
      </a>
      <button class="hamburger">
        <span>Menu</span>
      </button>
      <nav class="page-header__large">
      <?php wp_nav_menu( array( 
        'menu' => 'main-menu',
        'container'   => '',
        'items_wrap'      => '<ul  class="menu">%3$s</ul>' 
        ) ); ?>  
      </nav>
      <nav class="page-header__nav container">
      <?php wp_nav_menu( array( 
        'menu' => 'mobile-menu',
        'container'   => '',
        'items_wrap'      => '<ul  class="page-header__items">%3$s</ul>' 
        ) ); ?>  
      </nav>
    </header>
    <main>
