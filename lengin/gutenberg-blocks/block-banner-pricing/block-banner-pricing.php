<?php
$fields = get_fields();

require get_template_directory() . '/template-parts/settings.php';

$title = $fields['pb_title'];

?>


<section class="bannerPricing">
    <div class="container">

        <div class="wrap">
            <img class="bannerPricing-illustration-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingbanner/pricing-illustration-1.svg" alt="Illustration">
            <h1 class="title fz_h1">
                <?= $title; ?>
            </h1>
            <img class="bannerPricing-illustration-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingbanner/pricing-illustration-2.svg" alt="Illustration">
            <img class="bannerPricing-illustration-3" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingbanner/pricing-illustration-3.svg" alt="Illustration">
            <img class="bannerPricing-illustration-4" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingbanner/pricing-illustration-4.svg" alt="Illustration">
            <img class="bannerPricing-illustration-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingbanner/pricing-illustration-5.svg" alt="Illustration">
        </div>

    </div>
</section>