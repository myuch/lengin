<?php

add_action('init', 'register_post_team');

function register_post_team()
{
	register_post_type('team', [
		'label'  => null,
		'labels' => [
			'name'               => 'Team',
			'singular_name'      => 'Employee',
			'add_new'            => 'Add new Employee',
			'add_new_item'       => 'Add new Employee',
			'edit_item'          => 'Edit Employee',
			'new_item'           => 'Add new Employee',
			'view_item'          => 'View Employee',
			'search_items'       => 'Find Employee',
			'not_found'          => 'Not Found',
			'not_found_in_trash' => 'No items found in cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Team',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'supports'            => ['title', 'thumbnail'],
		'menu_icon' => 'dashicons-groups',
		'query_var'           => true,
	]);
}

