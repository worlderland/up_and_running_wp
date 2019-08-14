<?php
// Plugin Name: Twentyseventeen Register Restaurant Reviews

function twentyseventeen_register_restaurant_reviews() {
    $args = array(
        'public' => true,
        'menu_position' => 20,
        'has_archive'   => true,
        'label' => 'Restaurant Reviews'
    );
    register_post_type('restaurant_review', $args);
 }
add_action('init', 'twentyseventeen_register_restaurant_reviews');