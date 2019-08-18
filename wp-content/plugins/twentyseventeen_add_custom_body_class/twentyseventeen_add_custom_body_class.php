<?php
//Plugin Name: Twentyseventeen Add Custom Body Class

function twentyseventeen_add_custom_body_class($classes) {
    if(! is_singular()) {
        return $classes;
    }

    global $post;
    $custom_body_class = get_post_meta($post->ID, 'twentyseventeen_custom_body_class', true);

    if(empty($custom_body_class)) {
        return $classes;
    }

    $classes[] = $custom_body_class;
    return $classes;
}
add_filter('body_class', 'twentyseventeen_add_custom_body_class');