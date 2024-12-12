<?php
$options = get_fields('option');
$ln_list = $options['ln_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section id="numbers" class="numbers <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <?php if ($ln_list) : ?>
            <div class="wrap mt80">
                <?php foreach ($ln_list as $item) : ?>
                    <div class="numbers__item">
                        <?php if ($item['icon']) : ?>
                            <div class="iconBlock large <?= $item['color']; ?>">
                                <img src="<?= $item['icon']['url']; ?>" alt="Icon" width="56" height="56">
                            </div>
                        <?php endif; ?>
                        <div class="numbers__item_content">
                            <div class="numbers__item-numb">
                                <?php if ($item['text_before_number']) : ?>
                                    <span><?= $item['text_before_number']; ?></span>
                                <?php endif; ?>
                                <?php if ($item['number']) : ?>
                                    <span><?= $item['number']; ?></span>
                                <?php endif; ?>
                                <?php if ($item['text_after_number']) : ?>
                                    <span><?= $item['text_after_number']; ?></span>
                                <?php endif; ?>
                            </div>
                            <?php if ($item['short_desc']) : ?>
                                <p class="numbers__item-desc">
                                    <?= $item['short_desc']; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>