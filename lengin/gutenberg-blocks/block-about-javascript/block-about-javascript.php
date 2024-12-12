<?php
$fields = get_fields();

$aj_title = $fields['aj_title'];
$aj_description = $fields['aj_description'];
$aj_image = $fields['aj_image'];
$aj_line = $fields['aj_line'];

?>

<section class="aboutJs">
    <div class="container">

        <h2 class="title fz_h2">
            <?= $aj_title; ?>
        </h2>

        <div class="wrap">
            <div class="aboutJs__desc">
                <?= $aj_description; ?>
                <img class="aboutJs-line" src="<?= $aj_line; ?>" alt="line">
            </div>
            <img class="aboutJs-laptop" src="<?= $aj_image; ?>" alt="JS">
        </div>

    </div>
</section>

<script>
    jQuery(document).ready(function($) {

        $('.aboutJs-ill-1').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/about-javascript/line.svg" alt="line">');

    });
</script>