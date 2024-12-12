<?php
$fields = get_fields();

$select_review = $fields['pr_select_review'];
$reviewID = $select_review->ID;
$review_description = get_field('description', $reviewID);
$logo = get_field('logo', $reviewID);
$link_platform = get_field('link_for_platforms', $reviewID);
$review_position = get_field('position', $reviewID);
$review_photo = get_field('photo', $reviewID);
$review_photo_url = wp_get_attachment_image($review_photo['id'], 'large');
$t_linkedin = get_field('t_linkedin', $reviewID);

?>

<section class="pricingReview">
    <div class="container">

        <div class="wrap">
            <img class="pricingReview-illustration-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingreview/pricin-review-illustration-2.svg" alt="illustration">
            <img class="pricingReview-illustration-3" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingreview/pricin-review-illustration-3.svg" alt="illustration">
            <div class="block">
                <img class="pricingReview-stars" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingreview/stars.svg" alt="Stars">
                <div class="pricingReview__top">
                    <div class="pricingReview__logo">
                        <img class="pricingReview-illustration-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingreview/pricin-review-illustration-1.svg" alt="illustration">
                        <img  class="pricingReview-logo" src="<?= $logo['url']; ?>" alt="Logo">
                    </div>

                    <?php if ($link_platform) : ?>
                        <a href="<?= $link_platform; ?>" class="pricingReview__clutch" target="_blank">
                            <span>Rewiew on <p>Clutch</p></span>
                            <img class="pricingReview_clicon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/clutch-icon-white.svg" alt="Clutch">
                        </a>
                    <?php endif; ?>
                </div>
                <div class="pricingReview__desc">
                    <p>
                        <?= $review_description; ?>
                    </p>
                </div>

                <div class="pricingReview__row">
                    <div class="reviewPhoto">
                        <img src="<?= $review_photo_url; ?>" alt="Photo">
                    </div>
                    <div class="pricingReview__content">
                        <span class="pricingReview-name">
                            <?= $select_review->post_title; ?>
                        </span>
                        <span class="pricingReview-position">
                            <?= $review_position; ?>
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>