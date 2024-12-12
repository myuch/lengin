<?php
$fields = get_fields();

require get_template_directory() . '/template-parts/settings.php';

$title = $fields['br_title'];
$br_list = $fields['br_list'];
$br_buttons = $fields['br_buttons'];

?>

<section class="bannerReferral">
    <img class="bannerReferral-illustration-left" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bannerreferral/illustration-left.png" alt="Illustration">
    <img class="bannerReferral-illustration-right" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bannerreferral/illustration-right.png" alt="Illustration">
    <div class="container">

        <?php if ($title) : ?>
            <div class="bannerReferral__top">
                <div class="bannerReferral__top_wrap">
                    <h1 class="title fz_h1 tac">
                        <?= $title; ?>
                    </h1>
                    <img class="bannerReferral-line" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/bannerreferral/line.svg" alt="Illustration">
                </div>
            </div>
        <?php endif; ?>

        <?php if ($br_list) : ?>
            <div class="wrap">
                <?php foreach ($br_list as $item) : ?>
                    <div class="bannerReferral__item brs-16">
                        <div class="bannerReferral__item_row">
                            <span class="bannerReferral__item-number">
                                <?= $item['price']; ?>
                            </span>
                            <img src="<?= $item['icon']; ?>" alt="icon">
                        </div>
                        <p><?= $item['short_description']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="twoButtons">
            <?php if ($br_buttons['modal_button']) : ?>
                <button id="ssModal" class="btn btnPrimary openModalForm">
                    <?= $br_buttons['modal_button']; ?>
                </button>
            <?php endif; ?>
            <?php if ($br_buttons['modal_button_second']) : ?>
                <button class="btn btnText openModalForm">
                    <?= $br_buttons['modal_button_second']; ?>
                    <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
                </button>
            <?php endif; ?>
        </div>

    </div>
</section>