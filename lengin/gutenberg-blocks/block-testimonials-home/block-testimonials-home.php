<?php
$fields = get_fields();
$options = get_fields('option');

$btLinks = $options['block_testimonials'];

$testimonialsAll = new WP_Query(array(
    'post_type'      => 'testimonials',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'order'          => 'DESC',
    'orderby'        => 'rand',
));

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="tHome <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap mt48">
            <div class="swiper__buttons sbmt48">
                <div id="tHome-swiper-button-prev" class="swiper-button-prev">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40 32H24M24 32L31 25M24 32L31 39" stroke="#C7C9D6" stroke-width="1.5" />
                        <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                    </svg>
                </div>
                <div id="tHome-swiper-button-next" class="swiper-button-next">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 32H40M40 32L33 25M40 32L33 39" stroke="#C7C9D6" stroke-width="1.5" />
                        <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div id="tHomeSwiper" class="swiper">
            <div class="swiper-wrapper">
                <?php if ($testimonialsAll->have_posts()) : ?>
                    <?php while ($testimonialsAll->have_posts()) : $testimonialsAll->the_post(); ?>
                        <?php require get_template_directory() . '/gutenberg-blocks/block-testimonials-home/card.php'; ?>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
            <div id="tHomeSwiper-pagination" class="swiper-pagination"></div>
        </div>
    </div>

    <div class="container">
        <?php if ($btLinks['link']) : ?>
            <a href="<?= $btLinks['link']['url']; ?>" class="btn btnText">
                <?= $btLinks['link']['title']; ?>
                <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
            </a>
        <?php endif; ?>
    </div>
</section>

<?php if (is_admin()) : ?>
    <script src="<?= get_template_directory_uri() ?>/gutenberg-blocks/block-testimonials-home/src/testimonials-home.js"></script>
<?php endif; ?>