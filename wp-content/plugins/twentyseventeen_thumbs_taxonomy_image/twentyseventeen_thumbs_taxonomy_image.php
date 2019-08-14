<?php
//  Plugin Name: Twentyseventeen Thumbs Taxonomy Image

//Thumb-Up icon
// Get the term object
$thumbs_up_term = get_term_by('name', 'Thumbs Up!', 'thumbs');

// Get the ID property of the term object
$term_id = $thumbs_up_term->term_id;

//Add meta to the term object
update_term_meta($term_id, 'thumb_default_image', 'http://localhost:1080/AC/up_and_running_wp/wp-content/uploads/2019/08/25297.png');

//Thumb-Down icon
// Get the term object
$thumbs_down_term = get_term_by('name', 'Thumbs Down!', 'thumbs');

// Get the ID property of the term object
$term_id = $thumbs_down_term->term_id;

//Add meta to the term object
update_term_meta($term_id, 'thumb_default_image', 'http://localhost:1080/AC/up_and_running_wp/wp-content/uploads/2019/08/25237-3.png');


// function twentyseventeen_add_thumb_image_before_content($content) {
//     //Get array of thumbs terms that apply to this post
//     $thumb_rating_object_array = get_the_terms(get_the_ID(), 'thumbs');

//     //Check that there's at least one term
//     if (! (is_array($thumb_rating_object_array) && count($thumb_rating_object_array) > 0)) {
//         return $content;
//     }

//     //Get the ID property of thee first thumb term
//     $term_id = $thumb_rating_object_array[0]->term_id;

//     //Get term meta for the term, formatted as a string
//     $thumb_image_src = get_term_meta($term_id, 'thumb_default_image', true);

//     //Check that the term meta value is a string with greater than 0 length
//     if (! (is_string($thumb_image_src) && strlen($thumb_image_src) > 0)) {
//         return $content;
//     }

//     //Return fetched image before content
//     $img_string = '<img src"' . thumb_image_src . '">';
//     return $img_string . $content;
// }
// add_filter('the_content', 'twentyseventeen_add_thumb_image_before_content');

function twentyseventeen_add_thumb_image_before_content( $content ) {
    //// GGeett aarrrraayy ooff tthhuummbb tteerrmmss tthhaatt aappppllyy ttoo tthhiiss ppoosstt
    $thumb_rating_object_array = get_the_terms( get_the_ID(), 'thumbs' );
    //// CChheecckk tthhaatt tthheerree''ss aatt lleeaasstt oonnee tteerrmm
    if( ! (is_array( $thumb_rating_object_array ) && count( $thumb_rating_object_array ) > 0 ) ) {
    return $content;
    }
    //// GGeett tthhee IIDD pprrooppeerrttyy ooff tthhee ffiirrsstt tthhuummbb tteerrmm
    $term_id = $thumb_rating_object_array[0]->term_id;
    //// GGeett tteerrmm mmeettaa ffoorr tthhee tteerrmm,, ffoorrmmaatttteedd aass aa ssttrriinngg
    $thumb_image_src = get_term_meta( $term_id, 'thumb_default_image', true );
    //// CChheecckk tthhaatt tthhee tteerrmm mmeettaa vvaalluuee iiss aa ssttrriinngg wwiitthh ggrreeaatteerr tthhaann 00 lleennggtthh
    if( ! (is_string( $thumb_image_src ) && strlen( $thumb_image_src ) > 0 )) {
    return $content;
    }
    //// RReettuurrnn ffeettcchheedd iimmaaggee bbeeffoorree $$ccoonntteenntt
    $img_string = '<img src="' . $thumb_image_src . '">';
    return $img_string . $content;
    }
    add_filter( 'the_content', 'twentyseventeen_add_thumb_image_before_content' );