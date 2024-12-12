<div class="modalForm">
    <div class="container">

        <div class="modalForm__overlay"></div>

        <div class="block">
            <div class="modalForm__wrap">
                <div class="modalForm-close">
                    <svg class="" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_566668_6320)">
                            <path d="M20.0002 17.6436L28.2502 9.39355L30.6069 11.7502L22.3569 20.0002L30.6069 28.2502L28.2502 30.6069L20.0002 22.3569L11.7502 30.6069L9.39355 28.2502L17.6436 20.0002L9.39355 11.7502L11.7502 9.39355L20.0002 17.6436Z" fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_56448_6320">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="modalForm__form">
                    <span class="title fz_h4">
                        Tell us about your project
                    </span>
                    <?php echo do_shortcode('[contact-form-7 id="549" title="Modal Form"]') ?>
                    <div class="modalForm__contacts">
                        <span class="modalForm__contacts-title">
                            Our contacts
                        </span>
                        <div class="socials">
                            <?php if ($telegram) : ?>
                                <a href="<?= $telegram; ?>" class="socials__item siOrange" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/telegram.svg" alt="Telegram">
                                </a>
                            <?php endif; ?>
                            <?php if ($skype) : ?>
                                <a href="<?= $skype; ?>" class="socials__item siBlue" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/skype.svg" alt="Skype">
                                </a>
                            <?php endif; ?>
                            <?php if ($whatsapp) : ?>
                                <a href="<?= $whatsapp; ?>" class="socials__item siGreen" target="_blank">
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/socials/whatsapp.svg" alt="Whatsapp">
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="modalForm__contacts_list">
                            <?php if ($email) : ?>
                                <a href="mailto:<?= $email; ?>">
                                    <?= $email; ?>
                                </a>
                            <?php endif; ?>
                            <?php if ($phone) : ?>
                                <a href="tel:+380993103295">
                                    <?= $phone; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php require get_template_directory() . '/gutenberg-blocks/block-contact/contact-send.php'; ?>
            </div>
            
        </div>

    </div>
</div>