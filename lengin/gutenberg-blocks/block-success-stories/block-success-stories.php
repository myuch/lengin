<?php
$fields = get_fields();
$options = get_fields('option');

$bsLinks = $options['block_success_stories'];

require get_template_directory() . '/template-parts/settings.php';

$stories = new WP_Query(array(
    'post_type'      => 'stories',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'order'          => 'DESC',
    'orderby' => 'rand',
));

?>

<section id="sStories" class="sStories <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap mt48">
            <div class="swiper__buttons sbmt48">
                <div id="sStories-swiper-button-prev" class="swiper-button-prev">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40 32H24M24 32L31 25M24 32L31 39" stroke="#C7C9D6" stroke-width="1.5" />
                        <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                    </svg>
                </div>
                <div id="sStories-swiper-button-next" class="swiper-button-next">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 32H40M40 32L33 25M40 32L33 39" stroke="#C7C9D6" stroke-width="1.5" />
                        <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                    </svg>
                </div>
            </div>
            <div id="sStoriesSwiper" class="swiper">
                <div class="swiper-wrapper">
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
                            <div class="swiper-slide">
                                <?php require get_template_directory() . '/template-parts/stories/card.php'; ?>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_query(); ?>
                    <?php endif; ?>
                </div>
                <div id="sStories-pagination" class="swiper-pagination"></div>
            </div>
        </div>

        <div class="twoButtons">
            <?php if ($bsLinks['modal_button']) : ?>
                <button id="ssModal" class="btn btnPrimary openModalForm">
                    <?= $bsLinks['modal_button']; ?>
                </button>
            <?php endif; ?>
            <?php if ($bsLinks['link']) : ?>
                <a href="<?= $bsLinks['link']['url']; ?>" class="btn btnText">
                    <?= $bsLinks['link']['title']; ?>
                    <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
                </a>
            <?php endif; ?>
        </div>
        
    </div>
</section>

<?php require get_template_directory() . '/template-parts/stories/modal.php'; ?>

<?php if (is_admin()) : ?>
    <script src="<?= get_template_directory_uri() ?>/gutenberg-blocks/block-success-stories/src/success-stories.js"></script>
<?php endif; ?>