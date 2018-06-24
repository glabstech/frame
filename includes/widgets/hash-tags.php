<?php

// register My_Widget
add_action( 'widgets_init', function(){
	register_widget( 'HashTags' );
});


class HashTags extends WP_Widget {
	// class constructor
	public function __construct() {
        $widget_ops = array( 
            'classname' => 'hash-tags',
            'description' => 'A plugin for CDC Hash Tags',
        );
        parent::__construct( 'HashTags', 'Hash Tags', $widget_ops );
    }
	
	// output the widget content on the front-end
	public function widget( $args, $instance ) {}

	// output the option form field in admin Widgets screen
	public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : esc_html__( 'Title', 'text_domain' );
        ?>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>">
                <?php esc_attr_e( 'Title:', 'text_domain' ); ?>
            </label> 
        
        <input 
            class="widefat" 
            id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" 
            name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" 
            type="text" 
            value="<?php echo esc_attr( $title ); ?>">
        </p>
        <?php
    }

	// save options
	public function update( $new_instance, $old_instance ) {}
}