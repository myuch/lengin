<?php
$fields = get_fields();
$options = get_fields('option');

$as_list = $fields['as_list'];


require get_template_directory() . '/template-parts/settings.php';

?>

<section class="aSuccess <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <?php if ($as_list) : ?>
            <div class="wrap mt48">
                <?php foreach ($as_list as $item) : ?>
                    <?php require get_template_directory() . '/gutenberg-blocks/block-achieving-success/asCard.php'; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($as_list) : ?>
            <div class="aSuccessMobile">
                <div id="aSuccessSwiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($as_list as $item) : ?>
                            <?php require get_template_directory() . '/gutenberg-blocks/block-achieving-success/asmCard.php'; ?>
                        <?php endforeach; ?>
                    </div>
                    <div id="aSuccess-pagination" class="swiper-pagination"></div>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>