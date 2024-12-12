<?php
$fields = get_fields();

$block_left = $fields['s_block_left'];
$block_right = $fields['s_block_right'];

?>

<section class="sure">
    <div class="container">

        <div class="wrap">
            <div class="sure__block">
                <img src="<?= $block_left['image']; ?>" alt="illustration">
                <div class="sure__block_desc">
                    <?= $block_left['description']; ?>
                </div>
                <button class="btnDark openModalForm">
                    <?= $block_left['button']; ?>
                </button>
            </div>
            <div class="sure__content">
                <span class="title fz_h3">
                    <?= $block_right['title']; ?>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/sure-line.svg" alt="line">
                </span>
                <div class="sure__content_desc">
                    <?= $block_right['description']; ?>
                </div>
                <a class="btnThird" href="<?= $block_right['link']; ?>">
                    Watch Interviews
                    <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
                </a>
            </div>
        </div>

    </div>
</section>