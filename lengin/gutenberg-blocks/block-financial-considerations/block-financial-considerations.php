<?php
$fields = get_fields();
$options = get_fields('option');

$cd_title = $fields['cd_title'];
$cd_image = $fields['cd_image'];
$cd_tf_list = $fields['cd_title_for_list'];
$cd_list = $fields['cd_list'];
$cd_description = $fields['cd_description'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="fCons <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap">
            <div class="fCons__block">
                <?php if ($cd_title) : ?>
                    <span class="fCons__block_title">
                        <?= $cd_title; ?>
                    </span>
                <?php endif; ?>

                <div class="wrapper">
                    <?php if ($cd_image) : ?>
                        <div class="fCons__image">
                            <img src="<?= $cd_image; ?>" alt="Costs of WPA">
                        </div>
                    <?php endif; ?>
                    <div class="fCons__process">
                        <?php if ($cd_tf_list) : ?>
                            <div class="fCons__process_header">
                                <p><?= $cd_tf_list; ?></p>
                                <span>%</span>
                            </div>
                        <?php endif; ?>
                        <?php if ($cd_list) : ?>
                            <ul class="fCons__list">
                                <?php foreach ($cd_list as $item) : ?>
                                    <li class="fCons__item <?= $item['color']; ?>">
                                        <p><?= $item['title']; ?></p>
                                        <span><?= $item['percent']; ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php if ($cd_description) : ?>
                <div class="fCons__content">
                    <?= $cd_description; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>