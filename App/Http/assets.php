<?php

/**
 * Enqueue scripts and styles.
 */
function thomasdev_scripts() {


  
  wp_enqueue_style( 'bootstrap', get_asset( 'vendor', 'bootstrap/css/bootstrap.min.css' ), [], _S_VERSION );
  wp_enqueue_style( 'icofont', get_asset( 'vendor', 'icofont/icofont.min.css' ), array(), _S_VERSION );
  wp_enqueue_style( 'boxicons', get_asset( 'vendor', 'boxicons/css/boxicons.min.css' ), array(), _S_VERSION );
  wp_enqueue_style( 'venobox', get_asset( 'vendor', 'venobox/venobox.css' ), array(), _S_VERSION );
  wp_enqueue_style( 'remixicon', get_asset( 'vendor', 'remixicon/remixicon.css' ), array(), _S_VERSION );
  wp_enqueue_style( 'owl.carousel', get_asset( 'vendor', 'owl.carousel/assets/owl.carousel.min.css' ), array(), _S_VERSION );
  wp_enqueue_style( 'aos', get_asset( 'vendor', 'aos/aos.css' ), array(), _S_VERSION );
  wp_enqueue_style( 'style', get_asset( 'css', 'style' ), array(), _S_VERSION );
  wp_enqueue_style( 'style', get_asset( 'css', 'style' ), array(), _S_VERSION );
  

  
  wp_enqueue_script( 'jquery', get_asset( 'vendor', 'jquery/jquery.min.js' ), [], null, true );
  wp_enqueue_script( 'bootstrap-bandle', get_asset( 'vendor', 'bootstrap/js/bootstrap.bundle.min.js' ), [], null, true );
  wp_enqueue_script( 'jquery-easing', get_asset( 'vendor', 'jquery.easing/jquery.easing.min.js' ), [], null, true );
  wp_enqueue_script( 'validate', get_asset( 'vendor', 'php-email-form/validate.js' ), [], null, true );
  wp_enqueue_script( 'venobox', get_asset( 'vendor', 'venobox/venobox.min.js' ), [], null, true );
  wp_enqueue_script( 'jquery-waypoints', get_asset( 'vendor', 'waypoints/jquery.waypoints.min.js' ), [], null, true );
  wp_enqueue_script( 'counterup', get_asset( 'vendor', 'counterup/counterup.min.js' ), [], null, true );
  wp_enqueue_script( 'owl.carousel', get_asset( 'vendor', 'owl.carousel/owl.carousel.min.js' ), [], null, true );
  wp_enqueue_script( 'aos', get_asset( 'vendor', 'aos/aos.js' ), [], null, true );
  wp_enqueue_script( 'jquery-form' );
  wp_enqueue_script( 'main', get_asset( 'js', 'main' ), [], null, true );

}
add_action( 'wp_enqueue_scripts', 'thomasdev_scripts' );