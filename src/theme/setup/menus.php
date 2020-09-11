<?php 

function laika_register_nav_menu(){
    register_nav_menus( array(
           'top_menu' => __( 'Top Menu', 'laika' ),
           'main_menu1'  => __( 'Main Menu ', 'laika' ),
           'footer_menu'  => __( 'Footer Menu ', 'laika' ),
        ) );
    }
    
add_action( 'after_setup_theme', 'laika_register_nav_menu', 0 );