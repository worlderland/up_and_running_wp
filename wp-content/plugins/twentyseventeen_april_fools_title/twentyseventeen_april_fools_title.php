<?php
//Plugin Name: Twentyseventeen April Fools Title

function twentyseventeen_april_fools_title() {
    $joke_title = '2017Surprise!';
    $site_title = get_option('blogname');

    //Save the normal title if not currently joke title
    if($site_title !== $joke_title) {
        update_option('site_normal_title', $site_title);
    }

    //On April 1st set the title to joke title
    $day = date('F j'); //F means A full textual representation of a month (January through December), j means The day of the month without leading zeros (1 to 31)
    if($day === 'April 1') {
        update_option('blogname', $joke_title);
        return;
    }

    //if normal_title exists and the site title is the joke title change it back
    $normal_title = get_option('site_normal_title');
    if($site_title === $joke_title && $normal_title) {
        update_option('blogname', $normal_title);
    }
}
add_action('init', 'twentyseventeen_april_fools_title');