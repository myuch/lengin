<?php if ($sb_numbers) : ?>
    <div class="sBannerNumbers">
        <?php foreach ($sb_numbers as $item) : ?>
            <div class="sBannerNumbers__item">
                <span class="sBannerNumbers__item-title">
                    <?= $item['title']; ?>
                </span>
                <span class="sBannerNumbers__item-subtitle">
                    <?= $item['subtitle']; ?>
                </span>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>