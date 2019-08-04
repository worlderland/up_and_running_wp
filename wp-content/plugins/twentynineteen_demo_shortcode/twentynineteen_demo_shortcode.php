<?php
//Plugin Name: Twentynineteen Demo Shortcode

add_shortcode('twentynineteen_demo_shortcode', 'twentynineteen_color_demo_shortcode');

//The shortcode handler function
function twentynineteen_color_demo_shortcode($attributes, $content='') {
    $attributes = shortcode_atts(array('background' => 'gold', 'color' => 'blue'), $attributes, 'twentynineteen_color_demo_shortcode');

    return '<p style="background: ' . $attributes['background'] . '; color: ' . $attributes['color'] . ';">' . $content . '</p>';
}