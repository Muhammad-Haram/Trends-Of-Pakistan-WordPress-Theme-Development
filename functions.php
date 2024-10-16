<?php

function load_css()
{
	wp_register_style('swiper', get_template_directory_uri() . '/css/swiper.min.css', array(), false, 'all');
	wp_enqueue_style('swiper');
	wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
	wp_enqueue_style('main');
    wp_register_style('carousel', get_template_directory_uri() . '/css/carousel.css', array(), false, 'all');
	wp_enqueue_style('carousel');
    wp_register_style('top-swiper', get_template_directory_uri() . '/css/top-swiper.css', array(), false, 'all');
	wp_enqueue_style('top-swiper');
}

add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
	wp_enqueue_script('jquery');
	wp_register_script('swiper', get_template_directory_uri() . '/js/swiper.min.js', array(), false, true);
	wp_enqueue_script('swiper');
	wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', array(), false, true);
	wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');

// theme option 

add_theme_support('post-thumbnails');
add_theme_support('widgets');

function my_sidebars()
{
	register_sidebar(

		array(
			'name' => 'Page Sidebar',
			'id' => 'page-sidebar',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
}
add_action('widgets_init', 'my_sidebars');

function search_only_posts($query) {
    if ($query->is_search && !is_admin()) {
        $query->set('post_type', 'post'); // Sirf posts dikhane ke liye
    }
    return $query;
}
add_action('pre_get_posts', 'search_only_posts');