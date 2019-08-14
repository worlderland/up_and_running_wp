<?php
//Plugin Name: Twentyseventeen Demo Shortcode

add_shortcode('twentyseventeen_demo_shortcode', 'twentyseventeen_color_demo_shortcode');

//The shortcode handler function
function twentyseventeen_color_demo_shortcode($attributes, $content='') {
    $attributes = shortcode_atts(array('background' => 'gold', 'color' => 'blue'), $attributes, 'twentyseventeen_color_demo_shortcode');

    return '<p style="background: ' . $attributes['background'] . '; color: ' . $attributes['color'] . ';">' . $content . '</p>';
}