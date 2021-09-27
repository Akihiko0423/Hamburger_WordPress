<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/hamburger.jpg">
    <?php wp_head(); ?>
  </head>
    
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class = "l-container">
      <!--タブレット時のグレー背景-->
      <div class = "c-tablet-background--gray"></div>
      <!--header part-->
      <header class = "l-header">
        <div class = "p-header">
          <div class = "p-header__left">
            <h1 class = "c-header-left__logo">
              <a href = "<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/pc_logo.png" alt="header-logo"></a>
            </h1>
          </div>
          <div class = "p-header__right"> 
            <?php get_search_form(); ?>
          </div>
          <div class = "p-header__menu-btn">
            <h2>Menu</h2>
          </div>
        </div>
      </header>