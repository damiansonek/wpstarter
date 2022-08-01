<?php 

function themeFiles() {
    wp_enqueue_style( 'main', get_template_directory_uri(). '/dist/main.css' );
    wp_enqueue_script( 'jquery', get_template_directory_uri(). '/js/jquery.min.js' );
    wp_enqueue_script( 'popper', get_template_directory_uri(). '/js/popper.min.js' );
    wp_enqueue_script( 'popper', get_template_directory_uri(). '/js/bootstrap.min.js' );
    wp_enqueue_script( 'scripts', get_template_directory_uri(). '/dist/main.min.js');
  }

  add_action('wp_enqueue_scripts', 'themeFiles');
  
  ?>