<?php
$fields = get_fields();
$options = get_fields('option');

$ab_title = $fields['ab_title'];
$ab_description = $fields['ab_description'];
$ab_button = $fields['ab_button'];
$ab_numbers = $fields['ab_numbers'];
$ab_image = wp_get_attachment_image($fields['ab_image']['id'], 'large', false, ['loading' => 'eager', 'class' => 'disableLazyLoad']);
require get_template_directory() . '/template-parts/settings.php';

?>

<section class="aBanner">
    <div class="container">

        <div class="wrap">
            <div class="aBanner__content">
                <?php if ($ab_title) : ?>
                    <h1 class="title fz_h1">
                        <?= $ab_title; ?>
                    </h1>
                <?php endif; ?>
                <div class="aBanner__content_img">
                    <?= $ab_image; ?>
                </div>
                <?php if ($ab_description) : ?>
                    <div class="aBanner__desc lh19">
                        <?= $ab_description; ?>
                    </div>
                <?php endif; ?>
                <?php if ($ab_button) : ?>
                    <button class="btn btnPrimary btn-desktop openModalForm">
                        <?= $ab_button; ?>
                    </button>
                <?php endif; ?>
            </div>
            <div class="aBanner__img">
                <?= $ab_image; ?>
            </div>
        </div>

        <?php if ($ab_numbers) : ?>
            <div class="sBannerNumbers">
                <?php foreach ($ab_numbers as $item) : ?>
                    <div class="sBannerNumbers__item">
                        <span class="sBannerNumbers__item-title">
                            <?= $item['title']; ?>
                        </span>
                        <span class="sBannerNumbers__item-subtitle">
                            <?= $item['description']; ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($ab_button) : ?>
            <button class="btn btnPrimary btn-mobile openModalForm">
                <?= $ab_button; ?>
            </button>
        <?php endif; ?>

    </div>
</section>