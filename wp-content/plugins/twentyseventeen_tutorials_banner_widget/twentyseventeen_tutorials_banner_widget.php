<?php
// Plugin Name: Twentyseventeen Tutorials Banner Widget

// Create the widget
class Twentyseventeen_Tutorials_Banner_Widget extends WP_Widget {
    public function widget($args, $instance) {
        echo '<h2>Enjoy WP Tutorials by WPShout</h2>';
    }

    public function __construct() {
        parent::__construct(
            'twentyseventeen_tutorials_banner_widget', //BAse ID
            'Twentyseventeen Tutorials Banner Widget', //Name
            array('description' => 'Displays a simple text string with no options') //Args
        );
    }
}

// REgister widget
function twentyseventeen_register_tutorials_banner_widget() {
    register_widget('Twentyseventeen_Tutorials_Banner_Widget');
}
add_action('widgets_init', 'twentyseventeen_register_tutorials_banner_widget');