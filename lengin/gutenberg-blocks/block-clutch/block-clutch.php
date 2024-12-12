<?php
$options = get_fields('option');

$cl_stars_title = $options['cl_stars_title'];
$cl_stars_image = $options['cl_stars_image'];
$cl_logo = $options['cl_logo'];
$cl_reviews_count = $options['cl_reviews_count'];
$cl_years = $options['cl_years'];
$cl_projects = $options['cl_projects'];

$cl_logo = wp_get_attachment_image($options['cl_logo']['id'], 'medium');
$cl_stars_image = wp_get_attachment_image($options['cl_stars_image']['id'], 'medium');

?>

<section class="sClutch">
    <div class="container">
        <div class="wrap">
            <div class="sClutch__col">
                <a href="https://clutch.co/profile/lengin#reviews" class="sClutch__logo" target="_blank">
                    <div class="sClutch__logo_top">
                        <?php if ($cl_stars_title) : ?>
                            <span class="sClutch__logo-text">
                                <?= $cl_stars_title; ?>
                            </span>
                        <?php endif; ?>
                        <?php if ($cl_stars_image) : ?>
                            <div class="sClutch__logo-stars">
                                <?= $cl_stars_image; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="sClutch__logo_bottom">
                        <?php if ($cl_logo) : ?>
                            <div class="sClutch-logo">
                                <?= $cl_logo; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($cl_reviews_count) : ?>
                            <span class="sClutch__logo-text">
                                <?= $cl_reviews_count; ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </a>
                <div class="sClutch-block"></div>
            </div>
            <div class="sClutch__col">
                <div class="sClutch__numbers">
                    <div class="sClutch__numbers_item">
                        <?php if ($cl_years['number']) : ?>
                            <span>
                                <?= $cl_years['number']; ?> +
                            </span>
                        <?php endif; ?>
                        <?php if ($cl_years['text']) : ?>
                            <p>
                                <?= $cl_years['text']; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="sClutch__numbers_item">
                        <?php if ($cl_projects['number']) : ?>
                            <span>
                                <?= $cl_projects['number']; ?> +
                            </span>
                        <?php endif; ?>
                        <?php if ($cl_projects['text']) : ?>
                            <p>
                                <?= $cl_projects['text']; ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>