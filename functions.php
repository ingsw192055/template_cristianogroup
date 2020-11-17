<?php

require_once( get_template_directory() . '/App/app.php' );



function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

require get_template_directory() . '/inc/plugin-compatibility/plugin-compatibility.php';