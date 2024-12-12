<?php
$fields = get_fields();

$hw_title = $fields['hw_title'];
$hw_list = $fields['hw_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="howWorks">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap">
            <?php foreach ($hw_list as $key => $item) : ?>
                <div class="howWorks__row">
                    <div class="item brs-16">
                        <div class="item__row">
                            <div class="item__row_left">
                                <span class="item-number">
                                    <?= $key + 1; ?>.
                                </span>
                                <?php if ($item['title']) : ?>
                                    <span class="item-title">
                                        <?= $item['title']; ?>
                                    </span>
                                <?php endif; ?>
                            </div>
                            <?php if ($item['icon']) : ?>
                                <img class="item-icon" src="<?= $item['icon']; ?>" alt="icon">
                            <?php endif; ?>
                        </div>
                        <?php if ($item['description']) : ?>
                            <div class="item__desc">
                                <?= $item['description']; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($item['line']) : ?>
                            <img class="item-line" src="<?= $item['line']; ?>" alt="line">
                        <?php endif; ?>
                    </div>
                    <?php if ($item['icon']) : ?>
                        <img class="howWorks-icon" src="<?= $item['icon']; ?>" alt="icon">
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>