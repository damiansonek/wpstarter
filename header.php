<!DOCTYPE html>
<html lang="en">

<head>

      <meta charset="UTF-8">
      <meta name="description" content="<?php bloginfo('description'); ?>" />
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title><?php wp_title( '|', true, 'right' ); ?></title>

      <?php wp_head(); ?>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/dist/nav.css">
</head>



<body <?php body_class(); ?>>

      <nav class="navbar navbar--dark">
            <div class="navbar--inner">
                  <div class="navbar--link navbar--side navbar__toggle">
                        <span class="menu-label">Menu</span>
                        <div id="nav-icon" class="ms-sm-2">
                              <span class="icon-dark"></span>
                              <span class="icon-dark"></span>
                        </div>
                  </div>

                  <?php get_template_part('template-parts/nav/navbarLogo'); ?>

                  <div class="navbar--side d-flex justify-content-end">
                        <a href="<?php echo get_home_url(); ?>/kontakt/"
                              class="navbar--link navbar--link--kontakt  <?php if ( wp_is_mobile() ) { echo 'link--black'; } ?> text-end">Kontakt</a>
                  </div>
            </div>
      </nav>

      <?php get_template_part('template-parts/navFullScreen'); ?>

      <main class="overflow-hidden">