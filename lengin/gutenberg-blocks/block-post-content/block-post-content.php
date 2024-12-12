<?php
$fields = get_fields();
$options = get_fields('option');

$postc_content = $fields['postc_content'];
$postc_images = $fields['postc_images'];
$tag = $fields['postc_tag'];
$fontSize = $fields['postc_font_size'];
$titleText = $fields['postc_title'];
$postc_image_left = wp_get_attachment_image($postc_images['image_left']['id'], 'full');

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="postContent <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php if ($titleText) : ?>
            <<?= $tag; ?> class="title <?= $fontSize; ?>">
                <?= $titleText; ?>
            </<?= $tag; ?>>
        <?php endif; ?>

        <?php if ($postc_image_left) : ?>
            <div class="postContent__images <?php if ($titleText) : ?>mt48<?php endif; ?>">
                <div class="postContent__images_item">
                    <img src="<?= $postc_images['image_left']['url']; ?>" alt="<?= $postc_images['image_left']['alt']; ?>">
                </div>
            </div>
        <?php endif; ?>

        <?php if ($postc_content) : ?>
            <div class="wrap mt48">
                <div class="postContent__wrapper">
                    <div class="postContent__content articleStyles">
                        <?= $postc_content; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>