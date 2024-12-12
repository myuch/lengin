<?php
$fields = get_fields();
$options = get_fields('option');

$postb_title = $fields['postb_title'];
$postb_content = $fields['postb_content'];

$postb_image = wp_get_attachment_image($fields['postb_image']['id'], 'full');

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="postBanner ptfb <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <p class="postBanner-subtitle">
            <?= the_title(); ?>
        </p>

        <?php if ($postb_title) : ?>
            <h1 class="title">
                <?= $postb_title; ?>
            </h1>
        <?php endif; ?>

        <?php if ($postb_image) : ?>
            <div class="postBanner__image">
                <img src="<?= $fields['postb_image']['url']; ?>" alt="<?= $fields['postb_image']['alt']; ?>">
            </div>
        <?php endif; ?>

        <?php if ($postb_content) : ?>
            <div class="postBanner__content articleStyles">
                <?= $postb_content; ?>
            </div>
        <?php endif; ?>

    </div>
</section>