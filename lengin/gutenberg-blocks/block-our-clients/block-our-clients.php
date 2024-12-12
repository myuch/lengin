<?php
$fields = get_fields();
$options = get_fields('option');

$ocFirstList = $options['oc_first_list'];
$ocSecondList = $options['oc_second_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="ourClients <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="ourClients__mobile">
            <?php foreach ($ocFirstList as $item) : ?>
                <?php
                $logo = wp_get_attachment_image($item['logo']['id'], 'large');
                ?>
                <?php if ($item['link']) { ?>
                    <a href="<?= $item['link']; ?>" class="ourClients__item" target="_blank">
                        <?= $logo; ?>
                    </a>
                <?php } else { ?>
                    <div class="ourClients__item">
                        <?= $logo; ?>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="wrap">
        <div id="ourClientsList-first" class="ourClientsList">
            <div id="clTopFirst" class="ourClientsList__wrap">
                <div class="ourClientsList__wrap_list">
                    <?php foreach ($ocFirstList as $item) : ?>
                        <?php require get_template_directory() . '/gutenberg-blocks/block-our-clients/item.php'; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="clTopSecond" class="ourClientsList__wrap">
                <div class="ourClientsList__wrap_list">
                    <?php foreach ($ocFirstList as $item) : ?>
                        <?php require get_template_directory() . '/gutenberg-blocks/block-our-clients/item.php'; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div id="ourClientsList-second" class="ourClientsList">
            <div id="clBottomFirst" class="ourClientsList__wrap">
                <div class="ourClientsList__wrap_list">
                    <?php foreach ($ocSecondList as $item) : ?>
                        <?php require get_template_directory() . '/gutenberg-blocks/block-our-clients/item.php'; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div id="clBottomSecond" class="ourClientsList__wrap">
                <div class="ourClientsList__wrap_list">
                    <?php foreach ($ocSecondList as $item) : ?>
                        <?php require get_template_directory() . '/gutenberg-blocks/block-our-clients/item.php'; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</section>
