<?php
$fields = get_fields();
$options = get_fields('option');

$wc_list = $fields['wc_list'];
require get_template_directory() . '/template-parts/settings.php';

?>

<section class="whyChoosing <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap <?php if ($titleText) : ?>mt48<?php endif; ?>">
            <?php if ($wc_list) : ?>
                <?php foreach ($wc_list as $item) : ?>
                    <div class="whyChoosing__item <?= $item['color']; ?>">
                        <div class="whyChoosing__item_wrap">
                            <?php if ($item['icon']) : ?>
                                <div class="iconBlock <?= $item['color']; ?>">
                                    <img src="<?= $item['icon']; ?>" alt="Icon" width="40" height="40">
                                </div>
                            <?php endif; ?>
                            <div class="whyChoosing__item_content">
                                <?php if ($item['title']) : ?>
                                    <h3 class="title fz_h5">
                                        <?= $item['title']; ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($item['short_description']) : ?>
                                    <p class="lh19"><?= $item['short_description']; ?></p>
                                <?php endif; ?>
                                <svg class="whyChoosing__item_arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 9L12 15L6 9" stroke="#C7C9D6" stroke-width="1.5" />
                                </svg>
                            </div>
                        </div>
                        <?php if ($item['short_description']) : ?>
                            <div class="whyChoosing__item_mContent lh19">
                                <p><?= $item['short_description']; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

    </div>
</section>