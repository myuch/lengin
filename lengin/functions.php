<?php

require get_template_directory() . '/inc/acf.php';
require get_template_directory() . '/inc/style-script.php';
require get_template_directory() . '/inc/menu.php';
require get_template_directory() . '/inc/gutenberg-elements.php';
require get_template_directory() . '/inc/posts/testimonials.php';
require get_template_directory() . '/inc/posts/stories.php';
require get_template_directory() . '/inc/posts/projects.php';
require get_template_directory() . '/inc/posts/team.php';

add_action('after_setup_theme', 'register_custom_thumbnail_size');


add_theme_support('post-thumbnails');
add_theme_support('post-thumbnails', array('customposttypename'));

function yoasttobottom()
{
    return 'low';
}
add_filter('wpseo_metabox_prio', 'yoasttobottom');


function my_gutenberg_style()
{
    wp_enqueue_style('gutenberg-style', get_stylesheet_directory_uri() . '/editor.css');
}
add_action('enqueue_block_editor_assets', 'my_gutenberg_style');

add_filter('wpcf7_autop_or_not', '__return_false');

add_action('after_setup_theme', 'gutenberg_css');

function gutenberg_css()
{
    add_theme_support('editor-styles');
    add_editor_style('editor.css');
}

function register_custom_thumbnail_size()
{
    add_image_size('post-card', 600, 500, true);
    add_image_size('services-banner-mob', 400, 400, true);
}

// \Sentry\init([
//     'dsn' => 'https://e2846602ecac8bce96833f8365815066@o4505861353635840.ingest.sentry.io/4505884991553536',
//     // Specify a fixed sample rate
//     'traces_sample_rate' => 1.0,
//     // Set a sampling rate for profiling - this is relative to traces_sample_rate
//     'profiles_sample_rate' => 1.0,
// ]);


function wpp_preloadimages()
{
    echo '
    <link rel="preload" as="image" href="https://lenginwebsistg.wpengine.com/wp-content/uploads/2024/02/team-mobile.png" />
    <link rel="preload" as="image" href="https://lenginwebsistg.wpengine.com/wp-content/uploads/2024/02/team.png" />
    <link rel="preload" as="image" href="https://lengin.com/wp-content/uploads/2024/02/team.png" />
    <link rel="preload" as="image" href="https://lengin.com/wp-content/uploads/2024/02/team-mobile.png" />
    <link rel="preload" as="image" href="https://lengin.com/wp-content/uploads/2024/01/Illustration23.svg" />
    <link rel="preload" as="image" href="https://lengin.com/wp-content/uploads/2024/01/Illustration.svg" />
    <link rel="preload" as="image" href="https://lengin.com/wp-content/themes/lengin/assets/images/bannerreferral/illustration-left.png" />
    <link rel="preload" as="image" href="https://lengin.com/wp-content/themes/lengin/assets/images/bannerreferral/illustration-right.png" />

    <link rel="preload" as="image" href="https://lengin.com/wp-content/themes/lengin/assets/images/reviewsbanner/illustration-right.svg" />

    <link rel="preload" as="image" href="https://lenginwebsistg.wpengine.com/wp-content/uploads/2024/01/Illustration.svg" />
    <link rel="preload" as="image" href="https://lenginwebsistg.wpengine.com/wp-content/uploads/2024/01/Illustration23.svg" />
    <link rel="preload" as="image" href="https://lengin.com/wp-content/uploads/2024/01/Illustration.svg" />
    <link rel="preload" as="image" href="https://lengin.com/wp-content/uploads/2024/01/Illustration23.svg" />
    ';
}
add_action('wp_head', 'wpp_preloadimages');
