<?php
get_header();

$fields = get_fields();
$options = get_fields('option');

$author_id = get_the_author_meta('ID');

$blog = new WP_Query(array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 6,
    'order'          => 'DESC',
    'orderby' => 'date',
    'author'         => $author_id,
));

?>

<main class="main">
    <section class="pAuthor">
        <div class="container">
            <div class="breadcrumbs">
                <?php if (function_exists('bcn_display')) {
                    bcn_display();
                } ?>
            </div>

            <div class="wrap">
                <div class="author__content">
                    <div class="author__posts">
                        <?php if ($blog->have_posts()) : ?>
                            <?php while ($blog->have_posts()) : $blog->the_post(); ?>
                                <?php require get_template_directory() . '/gutenberg-blocks/block-blog/card.php'; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_query(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <aside class="sidebar right">
                    <?php require get_template_directory() . '/template-parts/article/author-block.php'; ?>
                    <!-- <div class="sidebarWrap">
                        <?php require get_template_directory() . '/template-parts/subscribe-block.php'; ?>
                    </div> -->
                </aside>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>