<?php

function service_services_group_posttype( array $parameters = [] ) {
  $args = [
    'post_type'         => $parameters['post_type'],
    'post_status'       => 'publish',
  ];

  $query = new WP_Query( $args );

  return $query;
}

function service_services_group_posttitle( array $parameters = [] ) {
  $args = [
    'post_type'         => ['property', 'restaurant', 'attraction'],
    'post_status'       => 'publish',
    'post_title'        =>  $parameters['post_title'],
    'orderby'           => 'date',
    'order'             => 'DESC',
  ];

  $query = new WP_Query( $args );

  return $query;
}

