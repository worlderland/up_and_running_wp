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

//Creating a widgets area
function twentynineteen_theme_slug_widgets_init() {
    $args = array(
        'name' => 'Widgetised sidebar',
        'id' => 'widgetised-sidebar',
        'description' => 'Our Widgetised Sidebar',
        'class' => '',
        'before_widget' => '<li id="%1$s" class="%2$s">',
        'after_widget' => '</li>',
        'before_title' => '<h2  class="widgettitle">',
        'after_title' => '</h2>',
    );
    register_sidebar($args);
}
add_action('widgets_init', 'twentynineteen_theme_slug_widgets_init');