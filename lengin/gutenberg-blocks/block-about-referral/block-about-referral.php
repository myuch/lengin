<?php
$fields = get_fields();

$ar_title = $fields['ar_title'];
$ar_description = $fields['ar_description'];
$ar_technologies = $fields['ar_technologies'];
$ar_numbers = $fields['ar_numbers'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="aboutReferral">
    <div class="container">


        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap">
            <img class="aboutReferral-illustration-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingreview/pricin-review-illustration-2.svg" alt="illustration">
            <img class="aboutReferral-illustration-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/pricingreview/pricin-review-illustration-3.svg" alt="illustration">
            <div class="block brs-16">

                <?php if ($ar_description) : ?>
                    <div class="aboutReferral__desc">
                        <?= $ar_description; ?>
                    </div>
                <?php endif; ?>

                <?php if ($ar_technologies) : ?>
                    <div class="aboutReferral__tech">
                        <?php foreach ($ar_technologies as $item) : ?>
                            <div class="item">
                                <img src="<?= $item['icon']; ?>" alt="icon">
                                <p><?= $item['title']; ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>
        </div>

        <?php if ($ar_numbers) : ?>
            <div class="aboutReferral__numbers">
                <?php foreach ($ar_numbers as $item) : ?>
                    <div class="item brs-16">
                        <div class="item__row">
                            <span class="item-number">
                                <?= $item['number']; ?>
                            </span>
                            <img src="<?= $item['icon']; ?>" alt="icon">
                        </div>
                        <p class="fz-28"><?= $item['text']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>