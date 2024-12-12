<?php
$fields = get_fields();

$title = $fields['bi_title'];
$desc = $fields['bi_short_description'];
$button = $fields['bi_button'];
$iconLeft = $fields['bi_icon_left'];
$iconRight = $fields['bi_icon_right'];

?>

<section class="bannerInfo">
    <div class="container">


        <div class="block">
            <div class="bannerInfo__content">
                <?php if ($title) : ?>
                    <h3 class="title fz_h3">
                        <?= $title; ?>
                    </h3>
                <?php endif; ?>
                <?php if ($desc) : ?>
                    <div class="bannerInfo__desc">
                        <?= $desc; ?>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($button) : ?>
                <button class="btnDark openModalForm">
                    <?= $button; ?>
                </button>
            <?php endif; ?>

            <?php if ($iconLeft) : ?>
                <img class="bannerInfo-iconLeft" src="<?= $iconLeft; ?>" alt="Illustration">
            <?php endif; ?>
            <?php if ($iconRight) : ?>
                <img class="bannerInfo-iconRight" src="<?= $iconRight; ?>" alt="Illustration">
            <?php endif; ?>

        </div>


    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $('.bi-title-ill-1').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bannerinfo/banner-info-ill-1.svg" alt="Illustration">');
        $('.bi-title-ill-2').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bannerinfo/banner-info-ill-2.svg" alt="Illustration">');
        $('.bi-title-ill-3').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bannerinfo/banner-info-ill-3.svg" alt="Illustration">');
        $('.bi-arrow').append('<img class="bi-arrow-ill" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/banner-info-arrow.svg" alt="Illustration">');
    });
</script>