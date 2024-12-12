<?php
$fields = get_fields();
$options = get_fields('option');

require get_template_directory() . '/template-parts/settings.php';

if (get_queried_object()) {
    $term = get_queried_object();
}

$current_page = !empty($_GET['pages']) ? $_GET['pages'] : '1';
if (get_queried_object() && $term->slug) {
    $projects = new WP_Query(array(
        'post_type'      => 'projects',
        'post_status'    => 'publish',
        'posts_per_page' => 5,
        'post_parent'    => 0,
        'order'          => 'DESC',
        'orderby' => 'date',
        'paged' => $current_page,
        'tax_query' => array(
            array(
                'taxonomy' => 'portfolio-technologies',
                'field'    => 'slug',
                'terms'    => $term->slug
            )
        )
    ));
} else {
    $projects = new WP_Query(array(
        'post_type'      => 'projects',
        'post_status'    => 'publish',
        'posts_per_page' => 5,
        'order'          => 'DESC',
        'orderby' => 'date',
        'paged' => $current_page,
    ));
}

$category = get_terms([
    'taxonomy' => 'portfolio-technologies',
    'hide_empty' => true,
]);

$current_url = home_url($_SERVER['REQUEST_URI']);
$home_url = get_home_url();

$path = parse_url($current_url, PHP_URL_PATH);
$parts = explode('/', rtrim($path, '/'));
$category_url = end($parts);

$capitalizedString = ucfirst($category_url);


?>

<section class="cPortfolio ptfb <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <div class="wrap">
            <aside class="sidebar left">
                <div class="sidebarWrap stickyElements">
                    <div class="sidebar__info">
                        <h1 class="title">
                            Portfolio
                        </h1>
                        <p>Explore our latest projects</p>
                    </div>
                    <?php require get_template_directory() . '/gutenberg-blocks/block-portfolio/tags.php'; ?>
                </div>
            </aside>
            <div class="cPortfolio__content">

                <div class="catalogPreviewMob lenSel lenSel-white">
                    <span class="title fz_h2">
                        Portfolio
                    </span>
                    <p>Explore our latest projects</p>
                    <div class="catalogPreviewMob__select">
                        <select id="catalogPreviewSelect" name="Portfolio" title="select your day">

                            <?php if ($category_url != "portfolio") : ?>
                                <option value="#"><?= $capitalizedString; ?></option>
                            <?php endif; ?>

                            <option value="<?= get_home_url(); ?>/portfolio">All topics</option>

                            <?php foreach ($category as $tag) : ?>
                                <?php
                                $pt_hide = get_field('pt_hide', $tag);
                                ?>
                                <?php if ($category_url != $tag->slug && !$pt_hide) : ?>
                                    <option value="<?= get_home_url(); ?>/portfolio-technologies/<?= $tag->slug ?>">
                                        <?= $tag->name; ?>
                                    </option>
                                <?php endif; ?>

                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <div class="cPortfolio__list">
                    <?php if ($projects->have_posts()) : ?>
                        <?php while ($projects->have_posts()) : $projects->the_post(); ?>
                            <?php require get_template_directory() . '/gutenberg-blocks/block-portfolio/card.php'; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </div>
                <?php require get_template_directory() . '/gutenberg-blocks/block-portfolio/pagination.php'; ?>
            </div>
        </div>

    </div>
</section>