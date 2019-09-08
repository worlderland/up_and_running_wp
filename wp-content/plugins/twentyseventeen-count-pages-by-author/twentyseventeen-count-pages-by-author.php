<?php
//Plugin Name: Twentyseventeen Count Pages By Author

function twentyseventeen_count_pages_by_author($content) {

//Returns "early" if we are not dealing with a single post of type Post
if (! is_singular('post')) {
        return $content;
    }

    //This sets up the array of query attributes passes to the WP_Query as the only argument
    $args = array (
        'author_id' => get_the_author_meta('ID'),
        'post_type' => 'page', //We only want posts of type Page
        'posts_per_page' => -1 //This is because we want all posts to be fetched at once (not just there first 10)
    );

    //Very important line, this initialises a new WP_Query object with the array of attributes $arg, and saves the object into the variable $query
    $query = new WP_Query($args);

    //If there are no posts (using have_posts()) PHP will return the content
    if($query->have_posts()) {
        $content = '<p><em>This post author has also written ' . count($query->posts) . ' pages.</em></p>' . $content;
    }

    //This cleans the $post global state back to referring to the main query
    wp_reset_postdata();

    //Returning the content whether or not it has been altered by the query
    return $content;
}
//Hooking into the content WP hook
add_filter('the_content', 'twentyseventeen_count_pages_by_author');