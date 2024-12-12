<?php

add_action('init', 'register_post_testimonials');
add_action('init', 'testimonial_categories');

function register_post_testimonials()
{
	register_post_type('testimonials', [
		'label'  => null,
		'labels' => [
			'name'               => 'Testimonials',
			'singular_name'      => 'Testimonial',
			'add_new'            => 'Add new Testimonial',
			'add_new_item'       => 'Add new Testimonial',
			'edit_item'          => 'Edit Testimonial',
			'new_item'           => 'Add new Testimonial',
			'view_item'          => 'View Testimonial',
			'search_items'       => 'Find Testimonial',
			'not_found'          => 'Not Found',
			'not_found_in_trash' => 'No items found in cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Testimonials',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'supports'            => ['title'],
		'menu_icon' => 'dashicons-testimonial',
		'query_var'           => true,
	]);
}

function testimonial_categories()
{
	register_taxonomy('categories', ['testimonials'], [
		'label'                 => '',
		'labels'                => [
			'name'              => 'Category',
			'singular_name'     => 'Category',
			'search_items'      => 'Find Category',
			'all_items'         => 'All Categories',
			'view_item '        => 'View Category',
			'parent_item'       => 'Categories',
			'parent_item_colon' => 'Categories:',
			'edit_item'         => 'Edit Category',
			'update_item'       => 'Update Category',
			'add_new_item'      => 'Add New Category',
			'new_item_name'     => 'New Category',
			'menu_name'         => 'Category',
		],
		'description'           => '',
		'public'                => true,
		'hierarchical'          => true,
		'capabilities'          => array(),
		'meta_box_cb'           => null,
		'show_admin_column'     => true,
		'show_in_rest'          => true,
		'rest_base'             => null,
	]);
}
