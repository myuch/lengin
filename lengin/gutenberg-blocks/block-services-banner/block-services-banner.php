<?php
$fields = get_fields();
$options = get_fields('option');

$sb_title = $fields['sb_title'];
$sb_short_description = $fields['sb_short_description'];
$sb_button = $fields['sb_button'];
$sb_first_desc = $fields['sb_first_desc'];
$sb_second_desc = $fields['sb_second_desc'];
$sb_third_desc = $fields['sb_third_desc'];
$sb_image = wp_get_attachment_image($fields['sb_image']['id'], 'large');
$sb_image_mob = wp_get_attachment_image($fields['sb_image']['id'], 'large', false, ['loading' => 'eager', 'class' => 'disableLazyLoad']);

$sb_numbers = $fields['sb_numbers'];
$sb_categories = $fields['sb_categories'];
$show_or_hide_clutch = $fields['show_or_hide_clutch'];

$cl_stars_title = $options['cl_stars_title'];
$cl_reviews_count = $options['cl_reviews_count'];
$cl_logo = wp_get_attachment_image($options['cl_logo_black']['id'], 'medium');
$cl_stars_image = wp_get_attachment_image($options['cl_stars_image_yellow']['id'], 'medium');

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="sBanner">
    <div class="container">

        <div class="wrap">
            <div class="sBanner__content">
                <?php if ($sb_title) : ?>
                    <h1 class="title fz_h3">
                        <?= $sb_title; ?>
                    </h1>
                <?php endif; ?>
                <?php require get_template_directory() . '/gutenberg-blocks/block-services-banner/block.php'; ?>
                <?php if ($sb_short_description) : ?>
                    <div class="sBanner__desc lh19">
                        <?= $sb_short_description; ?>
                    </div>
                <?php endif; ?>
                <?php if ($sb_button) : ?>
                    <button class="btn btnPrimary btn-desktop openModalForm">
                        <?= $sb_button; ?>
                    </button>
                <?php endif; ?>
            </div>
            <?php require get_template_directory() . '/gutenberg-blocks/block-services-banner/block.php'; ?>
        </div>

        <?php require get_template_directory() . '/gutenberg-blocks/block-services-banner/numbers.php'; ?>

        <?php if ($sb_button) : ?>
            <button class="btn btnPrimary btn-mobile openModalForm">
                <?= $sb_button; ?>
            </button>
        <?php endif; ?>

    </div>
</section>