<?php
$fields = get_fields();

$wc_list = $fields['wc_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="jsChoose <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <?php if ($wc_list) : ?>
            <div class="wrap desktopVersion mt80">
                <div class="swiper__buttons sbmt80">
                    <div id="jsChoose-swiper-button-prev" class="swiper-button-prev">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M40 32H24M24 32L31 25M24 32L31 39" stroke="#C7C9D6" stroke-width="1.5" />
                            <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                        </svg>
                    </div>
                    <div id="jsChoose-swiper-button-next" class="swiper-button-next">
                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 32H40M40 32L33 25M40 32L33 39" stroke="#C7C9D6" stroke-width="1.5" />
                            <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                        </svg>
                    </div>
                </div>
                <div id="jsChooseSwiper" class="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($wc_list as $item) : ?>
                            <div class="swiper-slide">
                                <?php require get_template_directory() . '/gutenberg-blocks/block-js-choose/card.php'; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="wrap mobileVersion mt80">
            <?php foreach ($wc_list as $item) : ?>
                <?php require get_template_directory() . '/gutenberg-blocks/block-js-choose/card.php'; ?>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<?php if (is_admin()) : ?>
    <script src="<?= get_template_directory_uri() ?>/gutenberg-blocks/block-js-choose/src/js-choose.js"></script>
<?php endif; ?>