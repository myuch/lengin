<?php
$fields = get_fields();
$options = get_fields('option');

$testimonialsAll = new WP_Query(array(
    'post_type'      => 'testimonials',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    'orderby'        => 'date',
));

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="testimonialsAll <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">
        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>
    </div>

    <div class="wrap mt48">
        <?php if ($testimonialsAll->have_posts()) : ?>
            <?php while ($testimonialsAll->have_posts()) : $testimonialsAll->the_post(); ?>
            <p></p>
                <?php require get_template_directory() . '/template-parts/testimonials/card.php'; ?>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        <?php endif; ?>
    </div>
</section>