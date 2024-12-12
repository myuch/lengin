<?php
$fields = get_fields();
$options = get_fields('option');

$ci_description = $fields['ci_description'];
$ci_list = $fields['ci_list'];

$ci_image = wp_get_attachment_image($fields['ci_image']['id'], 'large');



require get_template_directory() . '/template-parts/settings.php';

?>

<section class="cntImg <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap">
            <?php if ($ci_description || $ci_list) : ?>
                <div class="cntImg__content">
                    <?php if ($ci_description) : ?>
                        <?= $ci_description; ?>
                    <?php endif; ?>
                    <?php if ($ci_list) : ?>
                        <div class="cntImg__list">
                            <?php foreach ($ci_list as $item) : ?>
                                <div class="cntImg__list_item">
                                    <span class="title fz_h5">
                                        <?= $item['title']; ?>
                                    </span>
                                    <p><?= $item['description']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
            <?php if ($ci_image) : ?>
                <div class="cntImg__image">
                    <?= $ci_image; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>