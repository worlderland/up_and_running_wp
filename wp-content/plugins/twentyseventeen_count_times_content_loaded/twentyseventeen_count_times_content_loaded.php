<?php
//Plugin Name: Twentyseventeen Count Times Content Loaded

function twentyseventeen_count_times_content_loaded($content) {
    //Reset the count if on site's homepage
    if(is_front_page()) {
        delete_post_meta(get_the_ID(), 'twentyseventeen_times_content_loaded');
        return $content;
    }

    //Get the count; count is 0 if custom field not found
    $post_loads_count = get_post_meta(get_the_ID(), 'twentyseventeen_times_content_loaded', true);
    if(empty($post_loads_count)) {
        $post_loads_count = 0;
    }

    //Add 1 to the count and save
    $post_loads_count++;
    update_post_meta(get_the_ID(), 'twentyseventeen_times_content_loaded', $post_loads_count);

    //Return the updated count and the main post content
    return '<p><em>Content loaded ' . $post_loads_count . ' times</em></p>' . $content;
}
add_filter('the_content', 'twentyseventeen_count_times_content_loaded');