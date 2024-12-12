<?php
$image = wp_get_attachment_image($item['image']['id'], 'large');
?>
<div class="asCard">
    <div class="front" style="background: <?= $item['color']; ?>">
        <div class="asCard__top">
            <?php if ($item['logo']) : ?>
                <img src="<?= $item['logo']['url']; ?>" alt="Icon" width="40" height="40">
            <?php endif; ?>
            <?php if ($item['title']) : ?>
                <span class="title fz_h5">
                    <?= $item['title']; ?>
                </span>
            <?php endif; ?>
        </div>
        <?php if ($image) : ?>
            <div class="asCard-image">
                <?= $image; ?>
            </div>
        <?php endif; ?>
        <img class="asCard-arrow" src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/aSuccess-arrow.svg" alt="Arrow" width="60" height="60">
    </div>
    <div class="back" style="background: <?= $item['color']; ?>">
        <div class="asCard__top">
            <?php if ($item['logo']) : ?>
                <img src="<?= $item['logo']['url']; ?>" alt="Icon" width="40" height="40">
            <?php endif; ?>
            <?php if ($item['title']) : ?>
                <span class="title fz_h5">
                    <?= $item['title']; ?>
                </span>
            <?php endif; ?>
        </div>
        <?php if ($item['description']) : ?>
            <p class="asCard-shortDesc lh19">
                <?= $item['description']; ?>
            </p>
        <?php endif; ?>
    </div>
</div>