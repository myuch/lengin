<?php
$fields = get_fields();
$options = get_fields('option');

require get_template_directory() . '/template-parts/settings.php';

if (get_queried_object()) {
    $term = get_queried_object();
}

$current_page = !empty($_GET['pages']) ? $_GET['pages'] : '1';
if (get_queried_object() && $term->slug) {
    $blog = new WP_Query(array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 6,
        'post_parent'    => 0,
        'order'          => 'DESC',
        'orderby' => 'date',
        'paged' => $current_page,
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $term->slug
            )
        )
    ));
} else {
    $blog = new WP_Query(array(
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 6,
        'order'          => 'DESC',
        'orderby' => 'date',
        'paged' => $current_page,
    ));
}

$category = get_terms([
    'taxonomy' => 'category',
    'hide_empty' => true,
]);

$current_url = home_url($_SERVER['REQUEST_URI']);
$home_url = get_home_url();

$path = parse_url($current_url, PHP_URL_PATH);
$parts = explode('/', rtrim($path, '/'));
$category_url = end($parts);

$capitalizedString = ucfirst($category_url);

?>

<section class="cBlog ptfb <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <div class="wrap">
            <aside class="sidebar left">
                <div class="sidebarWrap stickyElements">
                    <div class="sidebar__info">
                        <h1 class="title">
                            IT Blog <br> News and Insights
                        </h1>
                        <p>Here you’ll find usefull insights and news on digital technologies and business</p>
                    </div>
                    <div class="tags">
                        <a href="<?= get_home_url(); ?>/blog/" class="tag <?php if (get_queried_object() && $term->post_type) : ?>active<?php endif; ?>">
                            All topics
                            <?php if (get_queried_object() && $term->post_type) : ?>
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tag-arrow-top-right.svg" alt="Arrow">
                            <?php endif; ?>
                        </a>
                        <?php foreach ($category as $tag) : ?>
                            <a href="<?= get_home_url(); ?>/category/<?= $tag->slug ?>" class="tag <?php if (get_queried_object() && $term->slug && $term->name == $tag->name) : ?>active<?php endif; ?>">
                                <?= $tag->name; ?>
                                <?php if (get_queried_object() && $term->slug && $term->name == $tag->name) : ?>
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tag-arrow-top-right.svg" alt="Arrow">
                                <?php endif; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </aside>
            <div class="cBlog__content">

                <div class="catalogPreviewMob lenSel lenSel-white">
                    <span class="title fz_h4">
                        IT Blog News and Insights
                    </span>
                    <p>Here you’ll find usefull insights and news on digital technologies and business</p>
                    <div class="catalogPreviewMob__select">
                        <select id="catalogPreviewSelect" name="Portfolio" title="select your day">


                            <?php if ($category_url != "blog") : ?>
                                <option value="<?= $category_url; ?>"><?= $capitalizedString; ?></option>
                            <?php endif; ?>

                            <option value="<?= get_home_url(); ?>/blog">All topics</option>

                            <?php foreach ($category as $tag) : ?>
                                <?php if ($category_url != $tag->slug) : ?>
                                    <option value="<?= get_home_url(); ?>/category/<?= $tag->slug ?>/">
                                        <?= $tag->name; ?>
                                    </option>
                                <?php endif; ?>
                            <?php endforeach; ?>

                        </select>
                    </div>
                </div>

                <div class="cBlog__list">
                    <?php if ($blog->have_posts()) : ?>
                        <?php while ($blog->have_posts()) : $blog->the_post(); ?>
                            <?php require get_template_directory() . '/gutenberg-blocks/block-blog/card.php'; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </div>


            </div>
            <aside class="sidebar right">
                <?php require get_template_directory() . '/template-parts/subscribe-block.php'; ?>
            </aside>
        </div>

        <?php require get_template_directory() . '/gutenberg-blocks/block-blog/pagination.php'; ?>

    </div>
</section>