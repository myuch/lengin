<?php
$fields = get_fields();

$lt_id = $fields['lt_id'];
$title = $fields['table_title'];
$numberPoints = $fields['number_of_points'];
$tHeader = $fields['table_header'];
$ltTable = $fields['lt_table'];

?>

<section id="<?= $lt_id; ?>" class="lsTable">
    <div class="container">

        <h2 class="title fz_h2">
            <?= $title; ?>
        </h2>

        <div class="wrap">

            <div class="lTable">
                <div class="lTable__header">
                    <div class="lTable__header_col">
                        <?= $tHeader['title_first']; ?>
                    </div>
                    <div class="lTable__header_col">
                        <?= $tHeader['title_second']; ?>
                    </div>
                    <div class="lTable__header_col">
                        <?= $tHeader['title_third']; ?>
                    </div>
                    <?php if ($numberPoints === 'three') : ?>
                        <div class="lTable__header_col">
                            <?= $tHeader['title_fourth']; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="lTable__body">
                    <?php foreach ($ltTable as $item) : ?>
                        <div class="lTable__body_row">
                            <div class="lTable__body_col">
                                <span class="lTable__body-title">
                                    <?= $item['title']; ?>
                                </span>
                            </div>
                            <div class="lTable__body_col">
                                <div class="lTable__body_checkbox">
                                    <?php if ($item['point_first'] === false) { ?>
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-false.svg" alt="checkbox">
                                    <?php } else { ?>
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-true.svg" alt="checkbox">
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="lTable__body_col">
                                <div class="lTable__body_checkbox">
                                    <?php if ($item['point_second'] === false) { ?>
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-false.svg" alt="checkbox">
                                    <?php } else { ?>
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-true.svg" alt="checkbox">
                                    <?php } ?>
                                </div>
                            </div>
                            <?php if ($numberPoints === 'three') : ?>
                                <div class="lTable__body_col">
                                    <div class="lTable__body_checkbox">
                                        <?php if ($item['point_third'] === false) { ?>
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-false.svg" alt="checkbox">
                                        <?php } else { ?>
                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-true.svg" alt="checkbox">
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

        <div class="lsTable__mobile">
            <div class="lsTable__slider_nav">
                <div class="swiperButton-prev swiperButton-item">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 24L12 16L20 8" stroke="#514F4C" stroke-width="1.5" />
                    </svg>
                </div>
                <div class="swiperButton-next swiperButton-item">
                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 24L12 16L20 8" stroke="#514F4C" stroke-width="1.5" />
                    </svg>
                </div>
            </div>
            <div class="lsTable__mobile_wrap">
                <div class="lTable lTable-first">
                    <div class="lTable__header">
                        <div class="lTable__header_col">
                            <?= $tHeader['title_first']; ?>
                        </div>
                    </div>
                    <div class="lTable__body">
                        <?php foreach ($ltTable as $item) : ?>
                            <div class="lTable__body_row">

                                <div class="lTable__body_col">
                                    <span class="lTable__body-title">
                                        <?= $item['title']; ?>
                                    </span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="lsTable__slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="lTable lTable-second">
                                <div class="lTable__header">
                                    <div class="lTable__header_col">
                                        <?= $tHeader['title_second']; ?>
                                    </div>
                                </div>
                                <div class="lTable__body">
                                    <?php foreach ($ltTable as $item) : ?>
                                        <div class="lTable__body_row">
                                            <div class="lTable__body_col">
                                                <div class="lTable__body_checkbox">
                                                    <?php if ($item['point_first'] === false) { ?>
                                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-false.svg" alt="checkbox">
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-true.svg" alt="checkbox">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="lTable lTable-second">
                                <div class="lTable__header">
                                    <div class="lTable__header_col">
                                        <?= $tHeader['title_third']; ?>
                                    </div>
                                </div>
                                <div class="lTable__body">
                                    <?php foreach ($ltTable as $item) : ?>
                                        <div class="lTable__body_row">
                                            <div class="lTable__body_col">
                                                <div class="lTable__body_checkbox">
                                                    <?php if ($item['point_second'] === false) { ?>
                                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-false.svg" alt="checkbox">
                                                    <?php } else { ?>
                                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-true.svg" alt="checkbox">
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <?php if ($numberPoints === 'three') : ?>
                            <div class="swiper-slide">
                                <div class="lTable lTable-second">
                                    <div class="lTable__header">
                                        <div class="lTable__header_col">
                                            <?= $tHeader['title_fourth']; ?>
                                        </div>
                                    </div>
                                    <div class="lTable__body">
                                        <?php foreach ($ltTable as $item) : ?>
                                            <div class="lTable__body_row">
                                                <div class="lTable__body_col">
                                                    <div class="lTable__body_checkbox">
                                                        <?php if ($item['point_third'] === false) { ?>
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-false.svg" alt="checkbox">
                                                        <?php } else { ?>
                                                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/checkbox-true.svg" alt="checkbox">
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script>
    jQuery(document).ready(function($) {

        $('.lsTable-ill-1').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/illustration-4.svg" alt="Illustration">');
        $('.lsTable-ill-2').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/illustration-2.svg" alt="Illustration">');
        $('.lsTable-ill-3').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/table/illustration-3.svg" alt="Illustration">');

        let swiper = new Swiper("#<?= $lt_id; ?> .lsTable__slider", {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
                nextEl: '#<?= $lt_id; ?> .swiperButton-next',
                prevEl: '#<?= $lt_id; ?> .swiperButton-prev',
            },
        });

    });
</script>