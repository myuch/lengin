<?php
$fields = get_fields();
$options = get_fields('option');

$ag_list = $options['ag_list'];
$ag_block = $fields['ag_block'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="aDevelopment <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>


        <?php if ($ag_list) : ?>
            <div class="wrap mt80">
                <?php foreach ($ag_list as $key => $item) : ?>
                    <div class="aDevelopment__item <?= $item['color']; ?>">
                        <div class="aDevelopment__item-number">
                            <svg width="99" height="113" viewBox="0 0 99 113" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M45.9996 2.17561C48.1654 0.925185 50.8338 0.925186 52.9996 2.17562L94.7961 26.3068C96.9619 27.5572 98.2961 29.8681 98.2961 32.369V80.6314C98.2961 83.1322 96.9619 85.4431 94.7961 86.6936L52.9996 110.825C50.8338 112.075 48.1654 112.075 45.9996 110.825L4.20312 86.6936C2.03732 85.4431 0.703125 83.1322 0.703125 80.6314V32.369C0.703125 29.8681 2.03732 27.5572 4.20312 26.3068L45.9996 2.17561Z" fill="transparent" stroke="#1F212F" stroke-width="2" />
                            </svg>
                            <span>0<?= $key + 1; ?></span>
                        </div>
                        <div class="aDevelopment__item-line"></div>
                        <div class="aDevelopment__item_content">
                            <span class="title fz_h5">
                                <?= $item['title']; ?>
                            </span>
                            <ul class="aDevelopment__items">
                                <?php foreach ($item['items'] as $li) : ?>
                                    <li><?= $li['item']; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>