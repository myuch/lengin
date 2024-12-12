<?php
$fields = get_fields();

$advantages = $fields['advantages'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="ourAdvantages">
    <div class="container">

        <div class="wrap">
            <?php foreach ($advantages as $item) : ?>
                <div class="ourAdvantages__item">
                    <img class="desktopImage" src="<?= $item['image_desktop']; ?>" alt="Advantages">
                    <img class="mobileImage" src="<?= $item['image_mobile']; ?>" alt="Advantages">
                    <span class="ourAdvantages__item-title">
                        <?= $item['title']; ?>
                    </span>
                    <p class="ourAdvantages__item-subtitle">
                        <?= $item['description']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>