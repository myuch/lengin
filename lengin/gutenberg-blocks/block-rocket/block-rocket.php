<?php
$fields = get_fields();

$r_title = $fields['r_title'];
$r_title_left = $fields['r_title_left'];
$r_title_right = $fields['r_title_right'];
$r_rocket = $fields['r_rocket'];
$r_list = $fields['r_list'];
$bottom_text = $fields['bottom_text'];

?>


<section class="rocket">
    <div class="container">

        <?php if ($r_title) : ?>
            <h2 class="title fz_h2">
                <?= $r_title; ?>
            </h2>
        <?php endif; ?>

        <div class="wrapper">
            <span class="rocket-title rocket-title-left">
                <?= $r_title_left; ?>
            </span>
            <img class="rocket-image" src="<?= $r_rocket; ?>" alt="rocket">
            <span class="rocket-title rocket-title-right">
                <?= $r_title_right; ?>
            </span>
        </div>

        <?php if ($r_list) : ?>
            <div class="wrap">
                <?php foreach ($r_list as $item) : ?>
                    <div class="item">
                        <img src="<?= $item['number']; ?>" alt="number">
                        <span class="item-title">
                            <?= $item['title']; ?>
                        </span>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="rocket__botttom">
            <img src="<?= get_template_directory_uri(). '/assets/images/rocket/rocket-ill.svg' ?>" alt="illustration">
        </div>

    </div>
</section>