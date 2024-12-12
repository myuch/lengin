<?php
$fields = get_fields();
$options = get_fields('option');

$ab_title = $fields['ab_title'];
$ab_button = $fields['ab_button'];
$ab_link = $fields['ab_link'];
$ab_numbers = $fields['ab_numbers'];
$ab_image = wp_get_attachment_image($fields['ab_image']['id'], 'large');

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="rBanner">
    <div class="container">

        <div class="wrap">
            <img class="rBanner-illustration-left" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/reviewsbanner/illustration-left.svg" alt="Illustration">
            <img class="rBanner-illustration-right" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/reviewsbanner/illustration-right.svg" alt="Illustration">
            <div class="rBanner__content">
                <?php if ($ab_title) : ?>
                    <h1 class="title fz_h1">
                        <?= $ab_title; ?>
                    </h1>
                <?php endif; ?>
                <div class="rBanner__buttons">
                    <?php if ($ab_button) : ?>
                        <button class="btn btnPrimary btn-desktop openModalForm">
                            <?= $ab_button; ?>
                        </button>
                    <?php endif; ?>
                    <?php if ($ab_link) : ?>
                        <a href="<?= $ab_link['url']; ?>" class="btn btnText">
                            <?= $ab_link['title']; ?>
                            <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $('.rBanner-line').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/reviewsbanner/line.svg" alt="Illustration">');
    });
</script>