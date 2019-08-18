<?php
// Plugin Name: Twentyseventeen Add Favourite Flavor To Content

function twentyseventeen_favorite_flavor_subtitle($content)
{
    $fave_flave = get_post_meta(get_the_ID(), 'twentyseventeen_current_favorite_flavor', true);
    //var_dump($fave_flave);

    if (empty($fave_flave)) {
        return $content;
    }

    $fave_flave_string = '<em>My current favorite flavor is: ' . $fave_flave . '</em><hr>';
    return $fave_flave_string . $content;
}
add_filter('the_content', 'twentyseventeen_favorite_flavor_subtitle');
