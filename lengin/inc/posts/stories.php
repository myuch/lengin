<?php

add_action('init', 'register_post_stories');

function register_post_stories()
{
	register_post_type('stories', [
		'label'  => null,
		'labels' => [
			'name'               => 'Stories',
			'singular_name'      => 'Story',
			'add_new'            => 'Add new Story',
			'add_new_item'       => 'Add new Story',
			'edit_item'          => 'Edit Story',
			'new_item'           => 'Add new Story',
			'view_item'          => 'View Story',
			'search_items'       => 'Find Story',
			'not_found'          => 'Not Found',
			'not_found_in_trash' => 'No items found in cart',
			'parent_item_colon'  => '',
			'menu_name'          => 'Stories',
		],
		'description'         => '',
		'public'              => true,
		'show_in_menu'        => null,
		'show_in_rest'        => true,
		'rest_base'           => null,
		'menu_position'       => null,
		'menu_icon'           => null,
		'supports'            => ['title', 'thumbnail', 'excerpt'],
		'menu_icon' => 'dashicons-welcome-write-blog',
		'query_var'           => true,
	]);
}

