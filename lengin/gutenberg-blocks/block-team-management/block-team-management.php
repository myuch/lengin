<?php
$fields = get_fields();
$options = get_fields('option');

$tm_title = $fields['tm_title'];
$management = $fields['management'];

?>

<section class="teamM  <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php if ($tm_title) : ?>
            <div class="teamM__top">
                <h2 class="title fz_h2">
                    <?= $tm_title; ?>
                </h2>
                <img class="teamM-illustration" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/team-arrow.svg" alt="arrow">
                <img class="teamM-illustration-mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/team-arrow-mobile.svg" alt="arrow">
            </div>
        <?php endif; ?>

        <div class="wrap">
            <div class="teamM__content">
                <div id="teamMContent" class="teamM__content-swiper">
                    <div class="swiper-wrapper">
                        <?php if ($management) : ?>
                            <?php foreach ($management as $item) : ?>
                                <?php
                                $postID = $item->ID;
                                $employee_description = get_field('employee_description', $postID);
                                ?>
                                <div class="swiper-slide">
                                    <div class="teamM-employee">
                                        <div class="teamM-employee-desc">
                                            <?= $employee_description; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
            <div class="teamM__photos">
                <div id="teamMPhotos" class="teamM__photos-swiper">
                    <div class="swiper-wrapper">
                        <?php if ($management) : ?>
                            <?php foreach ($management as $item) : ?>
                                <?php
                                $postID = $item->ID;
                                $image_id = get_post_thumbnail_id($postID);
                                $image_url = wp_get_attachment_image($image_id, 'large');
                                $employee_position = get_field('employee_position', $postID);
                                $employee_linkedin = get_field('employee_linkedin', $postID);
                                ?>
                                <div class="swiper-slide">
                                    <div class="teamMCard">
                                        <div class="teamMCard__photo">
                                            <?= $image_url; ?>
                                        </div>
                                        <div class="teamMCard__content">
                                            <span class="teamMCard-name">
                                                <?= $item->post_title; ?>
                                            </span>
                                            <div class="teamMCard__bottom">
                                                <span class="teamMCard-position">
                                                    <?= $employee_position; ?>
                                                </span>
                                                <?php if ($employee_linkedin) : ?>
                                                    <a href="<?= $employee_linkedin; ?>" class="teamMCard-linkedin" target="_blank">
                                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M9 6.55C9.917 5.613 11.111 5 12.5 5C13.9587 5 15.3576 5.57946 16.3891 6.61091C17.4205 7.64236 18 9.04131 18 10.5V18H16V10.5C16 9.57174 15.6313 8.6815 14.9749 8.02513C14.3185 7.36875 13.4283 7 12.5 7C11.5717 7 10.6815 7.36875 10.0251 8.02513C9.36875 8.6815 9 9.57174 9 10.5V18H7V5.5H9V6.55ZM2 3.5C1.60218 3.5 1.22064 3.34196 0.93934 3.06066C0.658035 2.77936 0.5 2.39782 0.5 2C0.5 1.60218 0.658035 1.22064 0.93934 0.93934C1.22064 0.658035 1.60218 0.5 2 0.5C2.39782 0.5 2.77936 0.658035 3.06066 0.93934C3.34196 1.22064 3.5 1.60218 3.5 2C3.5 2.39782 3.34196 2.77936 3.06066 3.06066C2.77936 3.34196 2.39782 3.5 2 3.5ZM1 5.5H3V18H1V5.5Z" fill="#FEFBF5" />
                                                        </svg>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="swiper-slide"></div>
                        <div class="swiper-slide"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="teamM__swiper_buttons">
            <div id="teamM-swiper-button-prev" class="swiper-button-prev">
                <svg width="56" height="32" viewBox="0 0 56 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="55" height="31" rx="15.5" stroke="#D9CFC3" />
                    <path d="M36 16H20M20 16L27 9M20 16L27 23" stroke="#514F4C" stroke-width="1.5" />
                </svg>
            </div>
            <div id="teamM-pagination" class="swiper-pagination"></div>
            <div id="teamM-swiper-button-next" class="swiper-button-next">
                <svg width="56" height="32" viewBox="0 0 56 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="0.5" y="0.5" width="55" height="31" rx="15.5" stroke="#D9CFC3" />
                    <path d="M20 16H36M36 16L29 9M36 16L29 23" stroke="#514F4C" stroke-width="1.5" />
                </svg>
            </div>
        </div>

    </div>
</section>
<?php if (is_admin()) : ?>
    <script src="<?= get_template_directory_uri() ?>/gutenberg-blocks/block-team-management/src/team.js"></script>
<?php endif; ?>