<?php
$postID = get_the_ID();
$color = get_field('color', $postID);
$logo = get_field('logo', $postID);
$photo = get_field('photo', $postID);
$position = get_field('position', $postID);
$description = get_field('description', $postID);
$t_platforms = get_field('t_platforms', $postID);
$link_for_platforms = get_field('link_for_platforms', $postID);

$logo_url = wp_get_attachment_image($logo['id'], 'medium');
$photo_url = wp_get_attachment_image($photo['id'], 'thumbnail');
?>

<div class="tCard <?= $color; ?>">
    <div class="tCard__platform">
        <?php if ($t_platforms == 'clutch') : ?>
            <?php if ($link_for_platforms) { ?>
                <a href="<?= $link_for_platforms; ?>" class="tCard__platform_item" target="_blank">
                    <span>Clutch</span>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/clutch-mini.svg" alt="Clutch" width="32" height="32">
                </a>
            <?php  } else { ?>
                <div class="tCard__platform_item">
                    <span>Clutch</span>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/clutch-mini.svg" alt="Clutch" width="32" height="32">
                </div>
            <?php } ?>
        <?php endif; ?>
    </div>
    <div class="tCard__wrap">
        <div class="tCard__col">
            <div class="tCard__top">
                <div class="tCard-line"></div>
                <?php if ($logo) : ?>
                    <div class="tCard-logo">
                        <?= $logo_url; ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if ($description) : ?>
                <div class="tCard__desc">
                    <p><?= $description; ?></p>
                </div>
            <?php endif; ?>
        </div>
        <div class="tCard__col">
            <div class="tCard__bootom">
                <div class="tCard__photo">
                    <div class="tCard__photo_block">
                        <?php if ($photo) : ?>
                            <?= $photo_url; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="tCard__data">
                    <span class="tCard-name">
                        <?= the_title(); ?>
                    </span>
                    <?php if ($position) : ?>
                        <span class="tCard-position">
                            <?= $position; ?>
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>