<?php
// Plugin Name: Twentynineteen Register Thumbs Taxonomy

function twentynineteen_register_thumbs_taxonomy() {
    $args = array(
        'hierarchical' => true,
        'label' => 'Thumbs Up/Down'
    );
    register_taxonomy('thumbs', array('post', 'restaurant_review'), $args);
    }
    add_action( 'init', 'twentynineteen_register_thumbs_taxonomy' );

function twentynineteen_register_thumbs_terms() {
    wp_insert_term('Thumbs Up!', 'thumbs', $args = array(
        'description' => 'This thing gets the thumbs up!',
        'slug' => 'thumbs-up'
    ));
    wp_insert_term('Thumbs Down!', 'thumbs', $args = array(
        'description' => 'This thing gets the thumbs down!',
        'slug' => 'thumbs-down'
    ));
}
    add_action( 'init', 'twentynineteen_register_thumbs_terms' );