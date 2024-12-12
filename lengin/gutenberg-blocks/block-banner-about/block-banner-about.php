<?php
$fields = get_fields();

$ba_title = $fields['ba_title'];
$ba_image = $fields['ba_image'];
$ba_image_mobile = $fields['ba_image_mobile'];

?>

<section class="aboutBanner">

    <div class="wrap">

        <?php if ($ba_title) : ?>
            <h1 class="title fz_h1">
                <?= $ba_title; ?>
            </h1>
        <?php endif; ?>

        <?php if ($ba_title) : ?>
            <img class="aboutBanner-ill desktop disableLazyLoad" src="<?= $ba_image; ?>" alt="Illustration">
        <?php endif; ?>

        <?php if ($ba_title) : ?>
            <img class="aboutBanner-ill mobile disableLazyLoad" src="<?= $ba_image_mobile; ?>" alt="Illustration">
        <?php endif; ?>
    </div>

</section>