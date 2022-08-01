<?php

// acf
add_filter('acf/settings/show_admin', '__return_false');

// wp pages
function wpdocs_remove_menus(){
    remove_menu_page( 'edit-comments.php' );  
    remove_menu_page( 'tools.php' ); 
  }
add_action( 'admin_menu', 'wpdocs_remove_menus' );

// zmiana motywu
function remove_theme_menus() {
    global $submenu;
    unset($submenu['themes.php'][5]);
    unset($submenu['themes.php'][15]);
    }
    
    add_action('admin_init', 'remove_theme_menus');

// edytory
define( 'DISALLOW_FILE_EDIT', true );

?>