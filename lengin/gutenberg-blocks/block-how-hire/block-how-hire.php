<?php
$fields = get_fields();

$hh_list = $fields['hh_list'];
$hh_image_first = $fields['hh_image_first'];
$hh_image_second = $fields['hh_image_second'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="howHire">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrapper">
            <img class="howHire-first-illustration" src="<?= $hh_image_first; ?>" alt="Illustration">
            <div class="wrap">
                <?php foreach ($hh_list as $key => $item) : ?>
                    <div class="howHire__item">
                        <div class="howHire__item-number">
                            <span>0<?= $key + 1; ?></span>
                            <img src="<?= $item['illustration']; ?>" alt="Illustration">
                        </div>
                        <span class="howHire__item-title">
                            <?= $item['title']; ?>
                        </span>
                        <p>
                            <?= $item['short_description']; ?>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
            <img class="howHire-second-illustration" src="<?= $hh_image_second; ?>" alt="Illustration">
        </div>

        <button class="btnPrimary openModalForm">
            Share Dev Requirements
        </button>

    </div>
</section>