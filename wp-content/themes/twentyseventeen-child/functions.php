<?php
//Environment: functions.php of a child theme whose parent theme is twentyseventeen
function enqueue_twentyseventeen_stylesheet()
{
    wp_enqueue_style(
        'twentyseventeen',
        get_template_directory_uri() . '/style.css'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_twentyseventeen_stylesheet');

function twentyseventeen_filter_example($title)
{
    return 'Hooked by Child Theme: ' . $title;
}
add_filter('the_title', 'twentyseventeen_filter_example');