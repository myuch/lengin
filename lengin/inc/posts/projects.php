<?php

add_action('init', 'register_post_projects');
add_action('init', 'projects_tax');

function register_post_projects()
{
	register_post_type('projects', [
		'label'  => null,
		'labels' => [
			'name'               => 'Projects',
			'singular_name'      => 'Project',
			'add_new'            => 'Add new Project',
			'add_new_item'       => 'Add new Project',
			'edit_item'          => 'Edit Project',
			'new_item'           => 'Add new Project',
			'view_item'          => 'View Project',
			'search_items'       => 'Find Project',
			'not_found'          => 'Not Found',
			'not_found_in_trash' => 'No items found in cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Projects',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'has_archive' => true,
		'supports'            => ['title', 'thumbnail', 'excerpt', 'editor'],
		'menu_icon' => 'dashicons-index-card',
		// 'rewrite'             => ['slug' => 'portfolio'],
		'query_var'           => true,
	]);

}


function projects_tax()
{
	register_taxonomy('categories', ['projects'], [
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
			'menu_name'         => 'Categories',
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
	register_taxonomy('portfolio-technologies', ['projects'], [
		'label'                 => '',
		'labels'                => [
			'name'              => 'Technology',
			'singular_name'     => 'Technology',
			'search_items'      => 'Find Technology',
			'all_items'         => 'All Technologies',
			'view_item '        => 'View Technology',
			'parent_item'       => 'Technologies',
			'parent_item_colon' => 'Technologies:',
			'edit_item'         => 'Edit Technology',
			'update_item'       => 'Update Technology',
			'add_new_item'      => 'Add New Technology',
			'new_item_name'     => 'New Technology',
			'menu_name'         => 'Technologies',
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
