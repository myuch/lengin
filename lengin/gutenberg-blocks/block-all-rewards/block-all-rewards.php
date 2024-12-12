<?php
$fields = get_fields();
$options = get_fields('option');

$awards = $options['awards'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="allAwards <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap mt48">
            <?php foreach ($awards as $item) : ?>
                <?php 
                    $logo = wp_get_attachment_image($item['logo']['id'], 'medium');
                ?>
                <a <?php if ($item['link']) : ?>href="<?= $item['link']; ?>" <?php endif; ?> class="allAwards__item <?php if ($item['link']) : ?>hasLink <?php endif; ?>" target="_blank">
                    <?= $logo; ?>
                </a>
            <?php endforeach; ?>
        </div>

    </div>
</section>