<?php
//Plugin Name: Twentyseventeen Favorite Song Widget
//Description: A plugin to create a "favourite song" widget
//Version; 1.0
//Authour: Alessandro Coraglia

class Twentyseventeen_Favorite_Song_Widget extends WP_Widget {

    public function widget($args, $instance) {
        echo $args['before_widget'];
        echo '<h2>Now Listening:</h2>';
        echo $instance['songinfo'];
        echo
        '<p>
            <audio controls>
                <source src="' . $instance['link'] . '" type="audio/mpeg">
                Your browser does not support audio element.
            </audio>
            <a href="' . $instance['link'] . '">Download it</a>
        </p>';
        echo $args['after_widget'];
    }

    public function twentyseventeen_favorite_song_widget() {
        //Instantiate the parent object
        parent::__construct(
            'twentyseventeen_favorite_song_widget', //BAse ID
            'Twentyseventeen Favorite Song Widget', //Name
            array ('description' => 'Widget for playable favorite song')
        );
    }

    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        //Fields
        $instance['link'] = strip_tags($new_instance['link']);
        $instance['songinfo'] = strip_tags($new_instance['songinfo']);
        return $instance;
    }

    //Widget form creation
    public function form($instance) {
        $link = '';
        $songinfo = '';

        //Check values
        if($instance) {
            $link = esc_attr($instance['link']);
            $songinfo = esc_textarea($instance['songinfo']);
        } ?>

        <p>
            <label for="<?php echo $this->get_field_id('link'); ?>">Link</label>
            <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="<?php echo $link; ?>" />
        </p>

        <p>
            <label for="<?php echo $this->get_field_id('songinfo'); ?>">Song Info:</label>
            <input class="widefat" id="<?php echo $this->get_field_id('songinfo'); ?>" name="<?php echo $this->get_field_name('songinfo'); ?>" type="<?php echo $songinfo; ?>" />
        </p>
    <?php 
    }
}

function twentyseventeen_register_widgets() {
    register_widget('Twentyseventeen Favorite Song Widget');
}
add_action('widgets_init', 'twentyseventeen_register_widgets');