<?php
$options = get_fields('option');
$platforms = $options['platforms'];
$location = $options['location'];
$email = $options['email'];
$phone = $options['phone'];
$cleanPhoneNumber = str_replace([' ', '-'], '', $phone);
$skype = $options['skype'];
$telegram = $options['telegram'];
$instagram = $options['instagram'];
$facebook = $options['facebook'];
$linkedin = $options['linkedin'];
$twitter = $options['twitter'];
$whatsapp = $options['whatsapp'];
$youtube = $options['youtube'];

$f_clutch = $options['f_clutch'];
$f_upwork = $options['f_upwork'];
?>


<footer class="footer">
    <div class="container">

        <div class="block">
            
            <div class="wrap">
                <div class="footer__left">

                    <div class="footer__col">
                        <div class="footer__contacts">
                            <span class="title fz_h6">
                                Our contacts
                            </span>
                            <?php if ($location) : ?>
                                <span>
                                    <?= $location; ?>
                                </span>
                            <?php endif; ?>
                            <?php if ($email) : ?>
                                <a href="mailto:<?= $email; ?>">
                                    <?= $email; ?>
                                </a>
                            <?php endif; ?>
                            <?php if ($phone) : ?>
                                <a href="tel:<?= $cleanPhoneNumber; ?>">
                                    <?= $phone; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="footer__col">
                        <div class="footer__socials">
                            <span class="title fz_h6">
                                Messengers
                            </span>
                            <div class="socials">
                                <?php if ($telegram) : ?>
                                    <a href="<?= $telegram; ?>" class="socials__item siOrange" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/telegram.svg" alt="Telegram" width="27" height="27">
                                    </a>
                                <?php endif; ?>
                                <?php if ($skype) : ?>
                                    <a href="<?= $skype; ?>" class="socials__item siBlue" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/skype.svg" alt="Skype" width="27" height="27">
                                    </a>
                                <?php endif; ?>
                                <?php if ($whatsapp) : ?>
                                    <a href="<?= $whatsapp; ?>" class="socials__item siGreen" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/whatsapp.svg" alt="Whatsapp" width="27" height="27">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="footer__socials">
                            <span class="title fz_h6">
                                Follow us
                            </span>
                            <div class="socials">
                                <?php if ($linkedin) : ?>
                                    <a href="<?= $linkedin; ?>" class="socials__item siGreen" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/linkedin.svg" alt="Linkedin" width="27" height="27">
                                    </a>
                                <?php endif; ?>
                                <?php if ($twitter) : ?>
                                    <a href="<?= $twitter; ?>" class="socials__item siBlue" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/twitter.svg" alt="Twitter" width="27" height="27">
                                    </a>
                                <?php endif; ?>
                                <?php if ($instagram) : ?>
                                    <a href="<?= $instagram; ?>" class="socials__item siRed" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/instagram.svg" alt="Instagram" width="27" height="27">
                                    </a>
                                <?php endif; ?>
                                <?php if ($facebook) : ?>
                                    <a href="<?= $facebook; ?>" class="socials__item siYellow" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/facebook.svg" alt="Facebook" width="27" height="27">
                                    </a>
                                <?php endif; ?>
                                <?php if ($youtube) : ?>
                                    <a href="<?= $youtube; ?>" class="socials__item siRed" target="_blank">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/youtube.svg" alt="Youtube" width="27" height="27">
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer__right">
                    <div class="topPlatforms">
                        <a class="topPlatforms__item" href="<?= $f_clutch['link']; ?>" target="_blank">
                            <?php if ($f_clutch['logo']) : ?>
                                <img class="topPlatforms__item-logo" src="<?= $f_clutch['logo']; ?>" alt="Clutch" width="140" height="40">
                            <?php endif; ?>
                            <div class="topPlatforms__item-ratings">
                                <?php if ($f_clutch['stars']) : ?>
                                    <img src="<?= $f_clutch['stars']; ?>" alt="Stars" width="108" height="20">
                                <?php endif; ?>
                                <span>
                                    <?= $f_clutch['rating']; ?>
                                </span>
                            </div>
                            <div class="topPlatforms__item-view">
                                <span>
                                    View <?= $f_clutch['reviews_count']; ?> Reviews
                                </span>
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tp-arrow.svg" alt="Arrow" width="24" height="24">
                            </div>
                        </a>
                        <a class="topPlatforms__item" href="<?= $f_upwork['link']; ?>" target="_blank">
                            <?php if ($f_upwork['logo']) : ?>
                                <img class="topPlatforms__item-logo" src="<?= $f_upwork['logo']; ?>" alt="Clutch" width="140" height="40">
                            <?php endif; ?>
                            <div class="topPlatforms__item-ratings">
                                <?php if ($f_upwork['stars']) : ?>
                                    <img src="<?= $f_upwork['stars']; ?>" alt="Stars" width="108" height="20">
                                <?php endif; ?>
                                <span>
                                    <?= $f_upwork['rating']; ?>
                                </span>
                            </div>
                            <div class="topPlatforms__item-view">
                                <span>
                                    View <?= $f_upwork['reviews_count']; ?> Reviews
                                </span>
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tp-arrow.svg" alt="Arrow" width="24" height="24">
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <div class="platforms">
                <?php foreach ($platforms as $item) :  ?>
                    <?php
                    $itemLogo = wp_get_attachment_image($item['logo']['id'], 'medium');
                    ?>
                    <?php if ($item['link']) { ?>
                        <a href="<?= $item['link']; ?>" class="platforms__item">
                            <?= $itemLogo; ?>
                        </a>
                    <?php } else { ?>
                        <div class="platforms__item">
                            <?= $itemLogo; ?>
                        </div>
                    <?php }  ?>
                <?php endforeach; ?>
            </div>

            <div class="footer__bottom">
                <span>Copyright © 2023 Lengin | All Rights Reserved | Designed by Lengin |</span>
                <div class="footer__bottom_links">
                    <a href="/terms-and-conditions">Terms and Conditions</a>
                    <span>|</span>
                    <a href="/privacy-policy">Privacy Policy</a>
                </div>
            </div>

        </div>
        
    </div>
</footer>

<?php require get_template_directory() . '/template-parts/modal-form.php'; ?>


<?php wp_footer(); ?>



</body>

</html>