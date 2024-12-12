<?php
$fields = get_fields();

$ceo_text = $fields['ceo_text'];
$cto_text = $fields['cto_text'];

?>

<section class="sInterview">
    <div class="container">
        <div class="wrapper">
            <img class="sInterview-seo" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/interview/ceo.svg" alt="ceo">
            <div class="wrap">
                <div class="sInterview__item">
                    <?= $ceo_text; ?>
                    <img class="sInterview-angle-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/interview/angle-1.svg" alt="angle">
                    <img class="sInterview-angle-3" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/interview/angle-3.svg" alt="angle">
                </div>
                <div class="sInterview__item">
                    <?= $cto_text; ?>
                    <img class="sInterview-angle-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/interview/angle-2.svg" alt="Telegram">
                    <img class="sInterview-angle-4" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/interview/angle-4.svg" alt="angle">
                </div>
            </div>
            <img class="sInterview-cto" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/interview/cto.svg" alt="cto">
        </div>
    </div>
</section>