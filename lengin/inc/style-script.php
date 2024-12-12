<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');
add_action('admin_enqueue_scripts', 'style_script_admin');


define('THEME_FILES_VERSION', '1.252236224225');

function theme_enqueue_scripts()
{
    wp_enqueue_style('fonts-style', get_template_directory_uri() . '/src/scss/fonts.css', array());
    wp_enqueue_style('swiper', get_template_directory_uri() . '/src/scss/libs/swiper.min.css', array(), null, false);
    wp_style_add_data('swiper', 'async', true);

    wp_enqueue_style('select2', get_template_directory_uri() . '/src/scss/libs/select2.min.css', array(), null, false);
    wp_style_add_data('select2', 'async', true);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/dist/css/main.min.css', array(), THEME_FILES_VERSION, false);
    wp_style_add_data('main-style', 'async', true);

  
    if (!is_page('contact-us') && !is_page('portfolio' && !is_page('referral-program'))) {
        wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js', array(), null, true);
    }

    wp_enqueue_script('select2', 'https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js', array(), null, true);
    // wp_enqueue_script('sentry', 'https://js.sentry-cdn.com/56090df6ae24774354c4b766f406b9df.min.js', array(), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/app.min.js', array('jquery'), THEME_FILES_VERSION, true);

    

    $stories = new WP_Query(array(
        'post_type'      => 'stories',
        'post_status'    => 'publish',
        'posts_per_page' => 12,
        'order'          => 'DESC',
        'orderby' => 'rand',
    ));

    $storiesDetails = [];

    if ($stories->have_posts()) :
        while ($stories->have_posts()) : $stories->the_post();
            $postID = get_the_ID();
            $storiesDetails[$postID] = array(
                'position'      => get_field('position', $postID),
                'site'      => get_field('st_site', $postID),
                'project'      => get_field('project', $postID),
                'logo'      => get_field('logo', $postID),
                'title'      => get_the_title(),
                'video'      => get_field('youtube_link', $postID),
                'linkedin'      => get_field('st_linkedin', $postID),
                'interviewInsights'      => get_field('interview_insights', $postID),
                'jsTechnologies'      => get_field('js_technologies', $postID),
            );
        endwhile;
        wp_reset_query();
    endif;

    wp_localize_script(
        'main',
        'site_option',
        array(
            'stories' => $storiesDetails,
        )
    );

    if (!current_user_can('update_core')) {
        wp_deregister_style('dashicons');
    }

    if (is_front_page()) {
        wp_dequeue_style('social-rocket');
    }
    wp_dequeue_style('wp-block-library');
}

function style_script_admin()
{

    wp_enqueue_style('swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.css');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js', array('jquery'), NULL, true);
}
