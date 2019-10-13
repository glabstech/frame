<?php

/*
    Register Sidebar Widget
*/

if (function_exists('register_sidebar')) :

	// Register the sidebar. Makes "Widgets" appear in wp-admin->Appearance

	$widgets = get_field('custom_widgets','option');

	foreach($widgets as $widget){
		$widget = (object)$widget;
		register_sidebar(array(
			'name' 			=> $widget->widget_name,
			'id' 			=> $widget->widget_id,
			'description' 	=> 'Usage PHP: dynamic_sidebar("'.$widget->widget_id.'");',
			'before_widget' => '<div class="side-widget-wrapper">',
			'after_widget' => '</div>',
		));		
	}

endif;