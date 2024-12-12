<?php
$image = wp_get_attachment_image($item['image']['id'], 'large');
?>
<div class="swiper-slide">
    <div class="asmCard" style="background: <?= $item['color']; ?>">
        <div class="asmCard__content">
            <div class="asmCard__top">
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
                <p class="asmCard-shortDesc lh19">
                    <?= $item['description']; ?>
                </p>
            <?php endif; ?>
        </div>
        <?php if ($image) : ?>
            <div class="asmCard-image">
                <?= $image; ?>
            </div>
        <?php endif; ?>
    </div>
</div>