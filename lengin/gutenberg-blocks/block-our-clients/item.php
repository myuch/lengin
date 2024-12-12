<?php
$logo = wp_get_attachment_image($item['logo']['id'], 'large');
?>
<?php if ($item['link']) { ?>
    <a href="<?= $item['link']; ?>" class="ourClientsList__item" target="_blank">
        <?= preg_replace('/\s+loading=[\'"]?lazy[\'"]?/', '', $logo); ?>
    </a>
<?php } else { ?>
    <div class="ourClientsList__item">
        <?= preg_replace('/\s+loading=[\'"]?lazy[\'"]?/', '', $logo); ?>
    </div>
<?php } ?>