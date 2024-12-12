<?php
get_header();

$categoryPost = get_categories();
$category = get_the_category();

$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('first_name');
$author_url = get_author_posts_url($author_id);
$author_name_last = get_the_author_meta('last_name');
$author_avatar = get_field('user_photo', 'user_' . $author_id);
$author_bio = get_the_author_meta('description');

if (get_queried_object()) {
    $term = get_queried_object();
}

?>

<main class="main">
    <section class="article">
        <div class="container">
            <div class="breadcrumbs">
                <a href="https://lengin.com/blog/">
                    Blog
                </a>
                <span class="bread-separator">&gt;</span>
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>

            <div class="wrap">
                <?php require get_template_directory() . '/template-parts/article/left-sidebar.php'; ?>
                <div class="article__center">
                    <?php require get_template_directory() . '/template-parts/article/preview.php'; ?>
                    <div class="article__content articleStyles">
                        <?php the_content(); ?>
                    </div>
                    <div class="shareButtons">
                        <?php //do_shortcode('[socialrocket]'); ?>
                    </div>
                    <?php require get_template_directory() . '/template-parts/article/author-block.php'; ?>
                </div>
                <?php require get_template_directory() . '/template-parts/article/right-sidebar.php'; ?>
            </div>

            <?php //require get_template_directory() . '/template-parts/subscribe.php'; ?>
        </div>
    </section>
    <?php require get_template_directory() . '/gutenberg-blocks/block-last-projects/block-last-projects.php'; ?>
</main>
<?php get_footer(); ?>