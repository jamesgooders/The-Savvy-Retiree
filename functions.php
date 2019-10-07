<?php

// adding the CSS and JS files


function wps_enqueue_fonts() {
    if (!is_admin()) {
        wp_register_style('font_roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto+Slab:400,700|Roboto:400,700&display=swap', array(), null, 'all');
		wp_register_style('font_baskerville', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700&display=swap', array(), null, 'all');
        wp_register_style('fontawesome', '//use.fontawesome.com/releases/v5.1.0/css/all.css');
     
 
    wp_enqueue_style('style',get_stylesheet_uri(),NULL, microtime() );
	wp_enqueue_script("main", get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
	wp_enqueue_style('font_roboto');
	wp_enqueue_style('font_baskerville');
	
    wp_enqueue_style('fontawesome');
    }
}
add_action('wp_enqueue_scripts', 'wps_enqueue_fonts');



// Adding Theme Support

function gt_init() {
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	add_theme_support('html5',
		array('comment-list', 'comment-form', 'search-form')
	);
}

add_action('after_setup_theme', 'gt_init');

// Projects Post Type

function gt_custom_post_type(){
	register_post_type('project',
		array(
			'rewrite' => array('slug' => 'projects'),
			'labels' => array(
			'name' => 'Projects',
			'singular_name' => 'Project',
			'add_new_item' => 'Add New Project',
			'edit_item' => 'Edit Project'
		),
			'menu-icon' => 'dashicons-buddicons-activity',
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'title', 'thumbnail', 'editor', 'excerpt', 'comments'
			)
		)
	);
}

add_action('init', 'gt_custom_post_type');

// Sidebar

function gt_widgets() {
register_sidebar(
	array(
		'name' => 'Main Sidebar',
		'id' => 'main_sidebar',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	)
	);
}

add_action('widgets_init', 'gt_widgets');

// Filters   THIS BREAKS THE SITE!!!!!!

// function search_filter($query) {
// 	if($query->is_search() {
// 		$query->set('post_type', array('post', 'projects'));
// 	}
// }


register_nav_menus( array(
	'primary' => esc_html__( 'Header', 'jameso' ),
) );












