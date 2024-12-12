<?php
$fields = get_fields();

$hy_title = $fields['hy_title'];
$hy_subtitle = $fields['hy_subtitle'];
$hy_description = $fields['hy_description'];
$hy_images = $fields['hy_images'];

?>

<section class="helpYou">
    <div class="container">

        <h2 class="title fz_h2">
            <?= $hy_title; ?>
        </h2>

        <div class="wrap">
            <span class="helpYou-subtitle">
                <?= $hy_subtitle; ?>
            </span>
            <div class="helpYou__desc">
                <?= $hy_description; ?>
            </div>
            <img class="helpYou-img-left" src="<?= $hy_images['image_left']; ?>" alt="Illustration">
            <img class="helpYou-img-right" src="<?= $hy_images['image_right']; ?>" alt="Illustration">
            <img class="helpYou-img-mobile" src="<?= $hy_images['image_mobile']; ?>" alt="Illustration">
        </div>


    </div>
</section>

<script>
    jQuery(document).ready(function($) {

        $('.helpYou-ill-1').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/helpyou/line.svg" alt="line">');
        $('.helpYou-text-icon-1').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/helpyou/money.svg" alt="line">');
        $('.helpYou-text-icon-2').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/helpyou/time.svg" alt="line">');
        $('.helpYou-text-icon-3').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/helpyou/energy.svg" alt="line">');

    });
</script>