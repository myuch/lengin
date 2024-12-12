<div class="sBannerClutch">
    <div class="sBannerClutch__top">
        <?php if ($cl_stars_title) : ?>
            <span class="sBannerClutch-text">
                <?= $cl_stars_title; ?>
            </span>
        <?php endif; ?>
        <?php if ($cl_stars_image) : ?>
            <div class="sClutch-stars">
                <?= $cl_stars_image; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="sBannerClutch__bottom">
        <?php if ($cl_logo) : ?>
            <div class="sClutch-logo">
                <?= $cl_logo; ?>
            </div>
        <?php endif; ?>
        <?php if ($cl_reviews_count) : ?>
            <span class="sBannerClutch-text">
                <?= $cl_reviews_count; ?>
            </span>
        <?php endif; ?>
    </div>
</div>