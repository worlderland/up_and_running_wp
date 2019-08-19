<?php
//Plugin Name: Twentyseventeen Cache Hard Math

function twentyseventeen_do_hard_math($int) {
    //Start is the starting integer
    $start = $int;

    //Insanely processing-intensive calcutions
    $i = 0;
    while ($i < 100000) {
        $int = pow(sqrt(sqrt(sqrt(sqrt($int)))), 16.0001);
        $i++;
    }

    //Return our array: what we started with and what resulted
    return array($start, $int);
}

function twentyseventeen_get_hard_math_transient() {
    //Get the transient
    $result = get_transient('hard_math');

    if(false !== $result) {
        //Transient exist so return it
        return $result;
    }

    //Get array from doing hard math (on seconds elapsed in current minute)
    $mathed = twentyseventeen_do_hard_math(date('s'));

    //Attenpt to set transient with array results; timeout is 10 seconds
    $bool_response = set_transient('hard_math', $mathed, 10);

    if(false === $bool_response) {
        //Setting the transient didn't work so return false for failure
        return false;
    }

    //Transient is now set so get it and return it
    return get_transient('hard_math');
}

function twentyseventeen_filter_content_with_hard_math_transient($content) {
    //Get the transient
    $result = twentyseventeen_get_hard_math_transient();

    //If transient isn't an array, just return content unaltered
    if(! is_array($result)) {
        return $content;
    }

    //Prepend string with transient datato content and return it
    return '<p>(<small>I did some terrifyingly inefficient math on the number ' . ltrim($result[0], '0') . ', and the result was: ' . $result[1] . '</small>)</p>' . $content; 
}
add_filter('the_content', 'twentyseventeen_filter_content_with_hard_math_transient');