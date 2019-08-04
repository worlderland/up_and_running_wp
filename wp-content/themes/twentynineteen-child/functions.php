<?php
//Environment: functions.php of a child theme whose parent theme is twentynineteen
function enqueue_twentynineteen_stylesheet() {
    wp_enqueue_style(
        'twentynineteen',
        get_template_directory_uri() . '/style.css'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_twentynineteen_stylesheet');

function twentynineteen_filter_example($title)
	{
		return 'Hooked by Child Theme: ' . $title;
	}
	add_filter('the_title', 'twentynineteen_filter_example');