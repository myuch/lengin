<div class="sManager">
    <div class="sManager-content">
        <?php if ($salesManager['name']) : ?>
            <span class="sManager-name">
                <?= $salesManager['name']; ?>
            </span>
        <?php endif; ?>

        <?php if ($salesManager['subtitle']) : ?>
            <span class="sManager-subtitle">
                <?= $salesManager['subtitle']; ?>
            </span>
        <?php endif; ?>

        <div class="sManager__contacts">
            <?php if ($salesManager['linkedin']) : ?>
                <a class="sManager__contacts-item" href="<?= $salesManager['linkedin']; ?>" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/linkedin.svg" alt="Linkedin" width="27" height="27">
                </a>
            <?php endif; ?>
            <?php if ($salesManager['telegram']) : ?>
                <a class="sManager__contacts-item cOrangeLight" href="<?= $salesManager['telegram']; ?>" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/telegram.svg" alt="Telegram" width="27" height="27">
                </a>
            <?php endif; ?>
            <?php if ($salesManager['whatsapp']) : ?>
                <a class="sManager__contacts-item cGreenLight" href="<?= $salesManager['whatsapp']; ?>" target="_blank">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/whatsapp.svg" alt="Whatsapp" width="27" height="27">
                </a>
            <?php endif; ?>
            <?php if ($salesManager['email']) : ?>
                <a class="sManager__contacts-item cRedLight" href="mailto:<?= $salesManager['email']; ?>">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/email.svg" alt="Whatsapp" width="27" height="27">
                </a>
            <?php endif; ?>
        </div>
    </div>

    <?php
    $attachment_id = $salesManager['photo']['id'];
    $image_url = wp_get_attachment_image($attachment_id, 'medium');
    ?>
    <?php if ($image_url) : ?>
        <div class="sManager-image">
            <?= $image_url; ?>
        </div>
    <?php endif; ?>
</div>