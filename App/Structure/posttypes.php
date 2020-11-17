<?php

function register_hotels_post_type() {

    register_post_type('property', [
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'albergo'),
        'taxonomies' => [],
        'supports' => ['title', 'editor', 'thumbnail', 'revisions'],
        'show_in_rest' => false,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-admin-post',
        'labels' => [
            'name' => esc_html__( 'Alberghi', 'consigliviaggi' ),
            'singular_name' => esc_html__( 'Alberghi', 'consigliviaggi' ),
            'menu_name' => esc_html__( 'Alberghi', 'consigliviaggi' ),
            'name_admin_bar' => esc_html__( 'Alberghi', 'consigliviaggi' ),
            'add_new' => esc_html__( 'Inserisci Albergo', 'consigliviaggi' ),
            'add_new_item' => esc_html__( 'Aggiungi nuovo albergo', 'consigliviaggi' ),
            'new_item' => esc_html__( 'Nuovo Albergo', 'consigliviaggi' ),
            'edit_item' => esc_html__( 'Modifica Albergo', 'consigliviaggi' ),
            'view_item' => esc_html__( 'Vedi Albergo', 'consigliviaggi' ),
            'all_items' => esc_html__( 'Tutti gli Alberghi', 'consigliviaggi' ),
            'search_items' => esc_html__( 'Cerca Alberghi', 'consigliviaggi' ),
            'not_found' => esc_html__( 'Nessun albergo trovato', 'consigliviaggi' ),
            'not_found_in_trash' => esc_html__( 'Nessun albergo trovato nel Cestino.', 'consigliviaggi' ),
        ],
    ]);
}
add_action('init', 'register_hotels_post_type');

function register_restaurant_post_type() {

    register_post_type('restaurant', [
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'ristoranti'),
        'taxonomies' => [],
        'supports' => ['title', 'editor', 'thumbnail', 'revisions'],
        'show_in_rest' => false,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-admin-post',
        'labels' => [
            'name' => esc_html__( 'Ristoranti', 'consigliviaggi' ),
            'singular_name' => esc_html__( 'Ristorante', 'consigliviaggi' ),
            'menu_name' => esc_html__( 'Ristorante', 'consigliviaggi' ),
            'name_admin_bar' => esc_html__( 'Ristorante', 'consigliviaggi' ),
            'add_new' => esc_html__( 'Inserisci Ristorante', 'consigliviaggi' ),
            'add_new_item' => esc_html__( 'Aggiungi nuovo Ristorante', 'consigliviaggi' ),
            'new_item' => esc_html__( 'Nuovo Ristorante', 'consigliviaggi' ),
            'edit_item' => esc_html__( 'Modifica Ristorante', 'consigliviaggi' ),
            'view_item' => esc_html__( 'Vedi Ristorante', 'consigliviaggi' ),
            'all_items' => esc_html__( 'Tutti i Ristoranti', 'consigliviaggi' ),
            'search_items' => esc_html__( 'Cerca Ristorante', 'consigliviaggi' ),
            'not_found' => esc_html__( 'Nessun ristorante trovato', 'consigliviaggi' ),
            'not_found_in_trash' => esc_html__( 'Nessun ristorante trovato nel Cestino.', 'consigliviaggi' ),
        ],
    ]);
}
add_action('init', 'register_restaurant_post_type');

function register_attraction_post_type() {

    register_post_type('attraction', [
        'public' => true,
        'has_archive' => false,
        'rewrite' => array('slug' => 'attrazioni'),
        'taxonomies' => [],
        'supports' => ['title', 'editor', 'thumbnail', 'revisions'],
        'show_in_rest' => false,
        'hierarchical' => true,
        'menu_icon' => 'dashicons-admin-post',
        'labels' => [
            'name' => esc_html__( 'Attrazioni', 'consigliviaggi' ),
            'singular_name' => esc_html__( 'Attrazione', 'consigliviaggi' ),
            'menu_name' => esc_html__( 'Attrazione', 'consigliviaggi' ),
            'name_admin_bar' => esc_html__( 'Attrazione', 'consigliviaggi' ),
            'add_new' => esc_html__( 'Inserisci Attrazione', 'consigliviaggi' ),
            'add_new_item' => esc_html__( 'Aggiungi nuova Attrazione', 'consigliviaggi' ),
            'new_item' => esc_html__( 'Nuova Attrazione', 'consigliviaggi' ),
            'edit_item' => esc_html__( 'Modifica Attrazione', 'consigliviaggi' ),
            'view_item' => esc_html__( 'Vedi Attrazione', 'consigliviaggi' ),
            'all_items' => esc_html__( 'Tutti le Attrazioni', 'consigliviaggi' ),
            'search_items' => esc_html__( 'Cerca Attrazione', 'consigliviaggi' ),
            'not_found' => esc_html__( 'Nessuna attrazione trovata', 'consigliviaggi' ),
            'not_found_in_trash' => esc_html__( 'Nessuna Attrazione trovata nel Cestino.', 'consigliviaggi' ),
        ],
    ]);
}
add_action('init', 'register_attraction_post_type');