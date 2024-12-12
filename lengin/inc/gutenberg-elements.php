<?php

// Show Style in Gutenberg
function tabor_setup()
{
	add_theme_support('editor-styles');
	add_editor_style('/dist/css/main.min.css');
}
add_action('after_setup_theme', 'tabor_setup');
add_action('acf/init', 'my_acf_init');


// Add align option
add_theme_support('align-wide');

function my_acf_block_render_callback($block)
{
	$slug = str_replace('acf/', '', $block['name']);

	if (file_exists(get_theme_file_path("/gutenberg-blocks/block-{$slug}/block-{$slug}.php"))) {
		include(get_theme_file_path("/gutenberg-blocks/block-{$slug}/block-{$slug}.php"));
	}
}

function slugify($string)
{
	return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
}

function custom_block_category($categories)
{
	$custom_block = array(
		'slug'  => 'my_category',
		'title' => __('My Custom Category', 'my_category'),
	);

	$categories_sorted = array();
	$categories_sorted[0] = $custom_block;

	foreach ($categories as $category) {
		$categories_sorted[] = $category;
	}

	return $categories_sorted;
}

// $img = wp_get_attachment_image( $attachment_id, $size, $icon, $attr );

add_filter('block_categories', 'custom_block_category', 11, 2);


function my_acf_init()
{

	if (function_exists('acf_register_block')) {
		acf_register_block(array(
			'name'				=> 'post-banner',
			'title'				=> __('Post Banner'),
			'description'		=> __('Post Banner'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('post, banner'),
		));
		acf_register_block(array(
			'name'				=> 'post-content',
			'title'				=> __('Post Content'),
			'description'		=> __('Post Content'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('post, content'),
		));
		acf_register_block(array(
			'name'				=> 'used-technologies',
			'title'				=> __('Used Technologies'),
			'description'		=> __('Used Technologies'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('technologies'),
		));
		acf_register_block(array(
			'name'				=> 'client-testimonial',
			'title'				=> __('Client Testimonial'),
			'description'		=> __('Client Testimonial'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('client, testimonial'),
		));
		acf_register_block(array(
			'name'				=> 'call-action',
			'title'				=> __('Call Action'),
			'description'		=> __('Call Action'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('image, 6 block'),
		));
		acf_register_block(array(
			'name'				=> 'benefits',
			'title'				=> __('Image & 6 blocks'),
			'description'		=> __('Image & 6 blocks'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('image, 6 block'),
		));
		acf_register_block(array(
			'name'				=> 'why-choosing',
			'title'				=> __('Information blocks without background'),
			'description'		=> __('Information blocks without background'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('choosing, why'),
		));
		acf_register_block(array(
			'name'				=> 'partner',
			'title'				=> __('Сolored info blocks'),
			'description'		=> __('Сolored info blocks'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('partner'),
		));
		acf_register_block(array(
			'name'				=> 'success-stories',
			'title'				=> __('Success Stories'),
			'description'		=> __('Success Stories'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('success, stories'),
		));
		acf_register_block(array(
			'name'				=> 'success-stories-all',
			'title'				=> __('Success Stories All'),
			'description'		=> __('Success Stories All'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('success, stories'),
		));
		acf_register_block(array(
			'name'				=> 'core-services',
			'title'				=> __('We help with'),
			'description'		=> __('We help with'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('core, services'),
		));

		acf_register_block(array(
			'name'				=> 'numbers',
			'title'				=> __('Numbers'),
			'description'		=> __('Numbers'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('numbers'),
		));
		acf_register_block(array(
			'name'				=> 'faq',
			'title'				=> __('Faq'),
			'description'		=> __('Faq'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('faq'),
		));
		acf_register_block(array(
			'name'				=> 'testimonials-home',
			'title'				=> __('Testimonials'),
			'description'		=> __('Testimonials'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('testimonials'),
		));
		acf_register_block(array(
			'name'				=> 'testimonials-all',
			'title'				=> __('Testimonials All'),
			'description'		=> __('Testimonials All'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('testimonials'),
		));
		acf_register_block(array(
			'name'				=> 'contact',
			'title'				=> __('Contact'),
			'description'		=> __('Contact'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('contact'),
		));

		acf_register_block(array(
			'name'				=> 'js-libraries',
			'title'				=> __('javaScript Libraries'),
			'description'		=> __('javaScript Libraries'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('js, libraries'),
		));
		acf_register_block(array(
			'name'				=> 'js-choose',
			'title'				=> __('Why we choose JavaScript?'),
			'description'		=> __('Why we choose JavaScript?'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('js, libraries'),
		));
		acf_register_block(array(
			'name'				=> 'awards',
			'title'				=> __('Awards'),
			'description'		=> __('Awards'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('awards'),
		));
		acf_register_block(array(
			'name'				=> 'clutch',
			'title'				=> __('Clutch'),
			'description'		=> __('Clutch'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('clutch'),
		));
		acf_register_block(array(
			'name'				=> 'start-banner',
			'title'				=> __('Start Banner'),
			'description'		=> __('Start Banner'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('start, banner'),
		));
		acf_register_block(array(
			'name'				=> 'specific-advantages',
			'title'				=> __('Specific Advantages'),
			'description'		=> __('Specific Advantages'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('specific, advantages'),
		));
		acf_register_block(array(
			'name'				=> 'achieving-success',
			'title'				=> __('Achieving Success'),
			'description'		=> __('Achieving Success'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('achieving, success'),
		));
		acf_register_block(array(
			'name'				=> 'content-image',
			'title'				=> __('Content & Image'),
			'description'		=> __('Content & Image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('content, image'),
		));
		acf_register_block(array(
			'name'				=> 'recent-projects',
			'title'				=> __('Projects (last posts)'),
			'description'		=> __('Projects (last posts)'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('recent, projects'),
		));
		acf_register_block(array(
			'name'				=> 'agile-development',
			'title'				=> __('Agile Development'),
			'description'		=> __('Agile Development'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('agile, development'),
		));
		acf_register_block(array(
			'name'				=> 'financial-considerations',
			'title'				=> __('Financial Considerations'),
			'description'		=> __('Financial Considerations'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('financial, considerations'),
		));
		acf_register_block(array(
			'name'				=> 'services-banner',
			'title'				=> __('Services Banner'),
			'description'		=> __('Services Banner'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('banner'),
		));
		acf_register_block(array(
			'name'				=> 'home-banner',
			'title'				=> __('Home Banner'),
			'description'		=> __('Home Banner'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('home, banner'),
		));
		acf_register_block(array(
			'name'				=> 'featured-projects',
			'title'				=> __('Projects (to choose)'),
			'description'		=> __('Projects (to choose)'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('featured, projects'),
		));
		acf_register_block(array(
			'name'				=> 'development',
			'title'				=> __('Development'),
			'description'		=> __('Development'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('development'),
		));
		acf_register_block(array(
			'name'				=> 'clients-revenue',
			'title'				=> __('Clients Revenue'),
			'description'		=> __('Clients Revenue'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('clients, revenue'),
		));
		acf_register_block(array(
			'name'				=> 'about-banner',
			'title'				=> __('About Banner'),
			'description'		=> __('About Banner'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('about, banner'),
		));
		acf_register_block(array(
			'name'				=> 'review-banner',
			'title'				=> __('Review Banner'),
			'description'		=> __('Review Banner'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('review, banner'),
		));
		acf_register_block(array(
			'name'				=> 'our-clients',
			'title'				=> __('Our Clients'),
			'description'		=> __('Our Clients'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('our, clients'),
		));
		acf_register_block(array(
			'name'				=> 'special',
			'title'				=> __('Special'),
			'description'		=> __('Special'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('special'),
		));
		acf_register_block(array(
			'name'				=> 'focusing',
			'title'				=> __('Focusing'),
			'description'		=> __('Focusing'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('focusing'),
		));
		acf_register_block(array(
			'name'				=> 'team',
			'title'				=> __('Team'),
			'description'		=> __('Team'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('team'),
		));
		acf_register_block(array(
			'name'				=> 'blog',
			'title'				=> __('Blog'),
			'description'		=> __('Blog'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('blog'),
		));
		acf_register_block(array(
			'name'				=> 'portfolio',
			'title'				=> __('Portfolio'),
			'description'		=> __('Portfolio'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('portfolio'),
		));

		acf_register_block(array(
			'name'				=> 'all-rewards',
			'title'				=> __('All Rewards'),
			'description'		=> __('All Rewards'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('rewards'),
		));

		acf_register_block(array(
			'name'				=> 'our-advantages',
			'title'				=> __('Our Advantages'),
			'description'		=> __('Our Advantages'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('advantages'),
		));

		acf_register_block(array(
			'name'				=> 'video',
			'title'				=> __('Video'),
			'description'		=> __('Video'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('video'),
		));

		acf_register_block(array(
			'name'				=> 'how-hire',
			'title'				=> __('How to hire'),
			'description'		=> __('How to hire'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('hire, how'),
		));

		acf_register_block(array(
			'name'				=> 'banner-info',
			'title'				=> __('Banner Info'),
			'description'		=> __('Banner Info'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('banner'),
		));

		acf_register_block(array(
			'name'				=> 'title-desc-image',
			'title'				=> __('Title & Desc & Image'),
			'description'		=> __('Title & Desc & Image'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('title'),
		));

		acf_register_block(array(
			'name'				=> 'task-solution',
			'title'				=> __('Task & Solution'),
			'description'		=> __('Task & Solution'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('solution, task'),
		));

		acf_register_block(array(
			'name'				=> 'project-task',
			'title'				=> __('Project & Task'),
			'description'		=> __('Project & Task'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('project, task'),
		));

		acf_register_block(array(
			'name'				=> 'interview',
			'title'				=> __('Interview'),
			'description'		=> __('Interview'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('interview'),
		));

		acf_register_block(array(
			'name'				=> 'banner-pricing',
			'title'				=> __('Banner Pricing'),
			'description'		=> __('Banner Pricing'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('banner, pricing'),
		));

		acf_register_block(array(
			'name'				=> 'banner-referral',
			'title'				=> __('Banner Referral'),
			'description'		=> __('Banner Referral'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('banner, referral'),
		));

		acf_register_block(array(
			'name'				=> 'two-blocks',
			'title'				=> __('Two Blocks'),
			'description'		=> __('Two Blocks'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('blocks'),
		));

		acf_register_block(array(
			'name'				=> 'two-lists',
			'title'				=> __('Two lists'),
			'description'		=> __('Two lists'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('lists'),
		));

		acf_register_block(array(
			'name'				=> 'pricing-review',
			'title'				=> __('Pricing Review'),
			'description'		=> __('Pricing Review'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('pricing, review'),
		));

		acf_register_block(array(
			'name'				=> 'perfect-badly',
			'title'				=> __('Perfect & Badly'),
			'description'		=> __('Perfect & Badly'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('perfect'),
		));

		acf_register_block(array(
			'name'				=> 'sure',
			'title'				=> __('Still not sure?'),
			'description'		=> __('Still not sure?'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('sure'),
		));

		acf_register_block(array(
			'name'				=> 'table',
			'title'				=> __('Table'),
			'description'		=> __('Table'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('table'),
		));

		acf_register_block(array(
			'name'				=> 'about-referral',
			'title'				=> __('About Referral'),
			'description'		=> __('About Referral'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('referral'),
		));

		acf_register_block(array(
			'name'				=> 'how-works',
			'title'				=> __('How Works'),
			'description'		=> __('How Works'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('works, how'),
		));

		acf_register_block(array(
			'name'				=> 'apply',
			'title'				=> __('Apply'),
			'description'		=> __('Apply'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('apply'),
		));

		acf_register_block(array(
			'name'				=> 'choosing',
			'title'				=> __('Choosing'),
			'description'		=> __('Choosing'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('choosing'),
		));

		acf_register_block(array(
			'name'				=> 'banner-about',
			'title'				=> __('Banner About'),
			'description'		=> __('Banner About'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('banner, about'),
		));

		acf_register_block(array(
			'name'				=> 'help-you',
			'title'				=> __('Help You'),
			'description'		=> __('Help You'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('help'),
		));

		acf_register_block(array(
			'name'				=> 'hire',
			'title'				=> __('Hire'),
			'description'		=> __('Hire'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('hire'),
		));

		acf_register_block(array(
			'name'				=> 'rocket',
			'title'				=> __('Rocket'),
			'description'		=> __('Rocket'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('rocket'),
		));

		acf_register_block(array(
			'name'				=> 'photo-with-people',
			'title'				=> __('Photo With People'),
			'description'		=> __('Photo With People'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('photo'),
		));

		acf_register_block(array(
			'name'				=> 'about-javascript',
			'title'				=> __('About Javascript'),
			'description'		=> __('About Javascript'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('Javascript'),
		));
		
		acf_register_block(array(
			'name'				=> 'lengin-numbers',
			'title'				=> __('Lengin Numbers'),
			'description'		=> __('Lengin Numbers'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('numbers'),
		));

		acf_register_block(array(
			'name'				=> 'team-management',
			'title'				=> __('Team Management'),
			'description'		=> __('Team Management'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('team'),
		));

		acf_register_block(array(
			'name'				=> 'clutchs',
			'title'				=> __('Clutchs'),
			'description'		=> __('Clutchs'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'my_category',
			'icon'				=> 'grid-view',
			'keywords'			=> array('clutchs'),
		));

	}
}
