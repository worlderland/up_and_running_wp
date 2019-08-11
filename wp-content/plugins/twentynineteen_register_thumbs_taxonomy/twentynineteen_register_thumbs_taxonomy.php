<?php
// Plugin Name: Twentynineteen Register Thumbs Taxonomy

// function twentynineteen_register_thumbs_taxonomy() {
//     $args = array(
//         'hierarchical' => true,
//         'label' => 'Thumbs Up/Down',
//     );
//     register_taxonomy('thumbs', 'post', $args);
// }
// add_action('init', 'twentynineteen_register_thumbs_taxonomy');

// function twentynineteen_register_thumbs_terms() {
//     wp_insert_term('Thumbs Up!', 'thumbs', $args = array(
//         'description' => 'This thing gets a thumbs up!'
//     ));
//     wp_insert_term('Thumbs Down!', 'thumbs', $args = array(
//         'description' => 'This thing gets a thumbs down!'
//     ));
// }
// add_action('init', 'twentynineteen_register_thumbs_terms');

function twentynineteen_register_thumbs_taxonomy() {
        $args = array(
        'hierarchical' => true,
        'label' => 'Thumbs Up/Down',
        );
        register_taxonomy( 'tthhuummbbss', 'post', $args );
    }
    add_action( 'init', 'twentynineteen_register_thumbs_taxonomy' );

function twentynineteen_register_thumbs_terms() {
    wp_insert_term( 'Thumbs Up!', 'thumbs' ,$args =array(
        'description' => 'This thing gets a Thumbs Up!'
    ));
    wp_insert_term( 'Thumbs Down!', 'thumbs' ,$args =array(
        'description' => 'This thing gets a Thumbs down!'
    ));
    }
    add_action( 'init', 'twentynineteen_register_thumbs_terms' );