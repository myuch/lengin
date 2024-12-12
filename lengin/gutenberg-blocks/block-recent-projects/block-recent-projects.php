<?php
$fields = get_fields();
$options = get_fields('option');

require get_template_directory() . '/template-parts/settings.php';

$projects = new WP_Query(array(
    'post_type'      => 'projects',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'order'          => 'DESC',
    'orderby'        => 'date',
));

?>

<section class="rProjects <?= $sPadding; ?> <?= $nameTheme; ?>">

    <div class="container">
        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap mt48">
            <div class="swiper__buttons sbmt48">
                <div id="rProjects-swiper-button-prev" class="swiper-button-prev">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40 32H24M24 32L31 25M24 32L31 39" stroke="#C7C9D6" stroke-width="1.5" />
                        <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                    </svg>
                </div>
                <div id="rProjects-swiper-button-next" class="swiper-button-next">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 32H40M40 32L33 25M40 32L33 39" stroke="#C7C9D6" stroke-width="1.5" />
                        <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                    </svg>
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper">
        <div id="rProjectsSwiper" class="swiper">
            <div class="swiper-wrapper">
                <?php if ($projects->have_posts()) : ?>
                    <?php while ($projects->have_posts()) : $projects->the_post(); ?>
                        <?php
                        $postID = get_the_ID();
                        $image_id = get_post_thumbnail_id(get_the_ID());
                        $image_url = wp_get_attachment_image($image_id, 'post-card');
                        $jsTechnologies = get_the_terms($postID, 'portfolio-technologies');
                        $country_flag = get_field('country_flag', $postID);
                        ?>
                        <div class="swiper-slide">
                            <div class="rpCard">
                                <a href="<?= the_permalink(); ?>" class="rpCard-link">
                                    <div class="rpCard-thumbnail">
                                        <?= $image_url; ?>
                                        <div class="rpCard__block">
                                            <div class="rpCard-flag">
                                                <img src="<?= $country_flag['url']; ?>" alt="Flag" width="140" height="140">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rpCard__content">
                                        <div class="rpCard__content_top">
                                            <h3 class="title fz_h5">
                                                <?= the_title(); ?>
                                            </h3>
                                            <div class="rpCard__desc">
                                                <?= the_excerpt(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php if ($jsTechnologies) : ?>
                                    <div class="cardTags">
                                        <?php foreach ($jsTechnologies as $item) : ?>
                                            <?php
                                            $pt_color = get_field('pt_color', $item);
                                            ?>
                                            <a href="<?= get_home_url(); ?>/portfolio-technologies/<?= $item->slug; ?>" class="cardTags-item <?= $pt_color; ?>">
                                                <?= $item->name; ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
            <div id="rProjects-pagination" class="swiper-pagination"></div>
        </div>
    </div>

</section>

<?php if (is_admin()) : ?>
    <script src="<?= get_template_directory_uri() ?>/gutenberg-blocks/block-recent-projects/src/recent-projects.js"></script>
<?php endif; ?>