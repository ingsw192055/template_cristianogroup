<?php

function submit_form_ajax() { 

  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'];

  ob_start();
  require_once( get_template_directory() . '/DEM/email.php' );
  $email_to_send = ob_get_clean();
  
  $to = [
    't.developer.c@gmail.com',
    $email,
  ];

  $check = wp_mail( $to, 'Richiesta informazioni', $email_to_send, array('Content-Type: text/html; charset=UTF-8') );
  if( $check ) {
    wp_send_json_success( $check );
  } else {
      
    wp_send_json_error( $check );
  }
}
add_action( 'wp_ajax_submit_form', 'submit_form_ajax' );
add_action( 'wp_ajax_nopriv_submit_form', 'submit_form_ajax' );