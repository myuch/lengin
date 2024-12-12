<?php
$fields = get_fields();
$options = get_fields('option');

$bsLinks = $options['block_success_stories'];

require get_template_directory() . '/template-parts/settings.php';

$stories = new WP_Query(array(
    'post_type'      => 'stories',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    'orderby' => 'date',
));

?>

<section id="sStories" class="sStoriesAll <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap mt48">
            <?php if ($stories->have_posts()) : ?>
                <?php while ($stories->have_posts()) : $stories->the_post(); ?>
                    <?php
                    $postID = get_the_ID();
                    $image_id = get_post_thumbnail_id(get_the_ID());
                    $image_url = wp_get_attachment_image($image_id, 'large');
                    $position = get_field('position', get_the_ID());
                    $postSlug = get_field('slug_id', get_the_ID());
                    $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    ?>
                    <?php require get_template_directory() . '/template-parts/stories/card.php'; ?>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            <?php endif; ?>
        </div>

        <div class="twoButtons">
            <?php if ($bsLinks['modal_button']) : ?>
                <button id="ssModal" class="btn btnPrimary openModalForm">
                    <?= $bsLinks['modal_button']; ?>
                </button>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php require get_template_directory() . '/template-parts/stories/modal.php'; ?>