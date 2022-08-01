<?php

// usunięcie lang swtichera 
add_filter( 'login_display_language_dropdown', '__return_false' );

/* Zmiana logo podczas logowania */
function my_login_logo_one() { ?>
<style type="text/css">
  body.login div#login h1 a {
    background-image: url(<?php echo get_template_directory_uri(); ?>/images/MSM-Design_Herb.png);
    background-size: contain;
    padding-bottom: 50px;
  }
</style>

<?php } 

 function my_login_stylesheet() {
      wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/dist/login.css' );
  }

  /* WP Admin własny favicon */
  function add_favicon() {
    $favicon_url = get_template_directory_uri() . '/images/fav_32.png';
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
  }



add_action('login_enqueue_scripts', 'my_login_stylesheet' );
add_action('login_enqueue_scripts', 'my_login_logo_one' );
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');



  ?>