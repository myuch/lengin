<?php
$fields = get_fields();

$first_block = $fields['first_block'];
$second_block = $fields['second_block'];

?>


<section class="twoBlocks">
    <div class="container">

        <div class="wrap">
            <div class="twoBlocks__item twoBlocks__item_first p-24">
                <?php if ($first_block['title']) : ?>
                    <span class="twoBlocks-title">
                        <?= $first_block['title']; ?>
                    </span>
                <?php endif; ?>
                <?php if ($first_block['description']) : ?>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twoblocks/two-bloks-line-1.svg" alt="Line">
                    <div class="twoBlocks__content">
                        <?= $first_block['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="twoBlocks__item twoBlocks__item_second p-24">
                <?php if ($second_block['title']) : ?>
                    <span class="twoBlocks-title">
                        <?= $second_block['title']; ?>
                    </span>
                <?php endif; ?>
                <?php if ($second_block['description']) : ?>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/twoblocks/two-bloks-line-2.svg" alt="Line">
                    <div class="twoBlocks__content">
                        <?= $second_block['description']; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>