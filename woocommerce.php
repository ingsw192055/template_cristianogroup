<?php

/** 
 * The template for displaying Woocommerce Product 
 * 
 * This is the template that displays all pages by default. 
 * Please note that this is the WordPress construct of pages 
 * and that other 'pages' on your WordPress site may use a 
 * different template. 
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy 
 * 
 * @package Cristiano Group 
 */

get_header(); ?>

<section id="listing" class="section-padding">
    <div class="container">
        <div class="section-header">
            <div class="woocommerce"><?php woocommerce_content(); ?></div>

        </div><!-- #main -->
    </div>
</section><!-- #primary -->

<?php
get_footer();
