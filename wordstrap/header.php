<!DOCTYPE html>
  <!-- dynamic language attribute -->
<html <?php language_attributes(); ?>>
  <head>
      <!-- dynamic character set -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- dynamic description -->
    <meta name="description" content="<?php bloginfo('description'); ?>">
      <!-- dynamic title: shows website name and site desciption or page title -->
    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
      <!-- dynamic template url -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
      <!-- dynamic stylesheet url -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
      <!-- dynamic head data for 3rd party plugins -->
    <?php #wp_head(); ?>
  </head>
  <body>
    <nav class="navbar navbar-default">
  	  <div class="container">
  	    <div class="navbar-header">
  	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  	        <span class="sr-only">Toggle navigation</span>
  	        <span class="icon-bar"></span>
  	        <span class="icon-bar"></span>
  	        <span class="icon-bar"></span>
  	      </button>
  	      <a class="navbar-brand" href="<?php bloginfo('url'); ?>"> <?php bloginfo('name'); ?> </a>
  	    </div>
  	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <?php
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => false,
              'menu_class'        => 'nav navbar-nav',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker())
            );
          ?>
  	      <form method="get" class="navbar-form navbar-right" role="search" action="<?php echo esc_url(home_url('/')); ?>">
            <label for="navbar-search" class="sr-only"> <?php _e('Search', 'textdomain'); ?> </label>
            <div class="form-group">
              <input type="text" class="form-control" name="s" id="navbar-search">
            </div>
            <button type="submit" class="btn btn-default"> <?php _e('Search', 'textdomain'); ?> </button>
  	      </form>
  	    </div>
  	  </div>
  	</nav>
