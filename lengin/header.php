<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="color-scheme" content="light" />

    <title><?php wp_title('', true, ''); ?></title>

    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-32x32.svg" sizes="32x32">
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-16x16.svg" type="image/svg+xml">
    <link rel="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="image/png" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-16x16.png" type="image/svg+xml">
    <link rel="icon" href="<?php echo get_stylesheet_directory_uri() ?>/assets/favicon/favicon-32x32.ico" type="icon" sizes="32x32">

    <?php
    wp_head();
    $options = get_fields('option');
    $currentUserId = get_current_user_id();
    $logo_url = wp_get_attachment_image($options['logo']['id'], 'large', false, ['loading' => 'eager', 'class' => 'disableLazyLoad']);
    $logo_dark_url = wp_get_attachment_image($options['logo_dark']['id'], 'large', false, ['loading' => 'eager', 'class' => 'disableLazyLoad']);
    ?>


</head>

<body <?php body_class(); ?>>


    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5KPCV2MR" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>

    <header class="header nav-down">
        <div class="container">

            <div class="wrap">
                <a href="<?= get_home_url(); ?>" class="logo">
                    <?= $logo_url; ?>
                </a>
                <?php
                wp_nav_menu([
                    'theme_location'  => 'header-menu',
                    'menu'            => 'header-menu',
                    'container'       => '',
                ]);
                ?>
                <div class="header__right">
                    <a href="<?= $options['link_in_header']['url']; ?>" class="btn btnSecondary">
                        <span><?= $options['link_in_header']['title']; ?></span>
                        <?php require get_template_directory() . '/assets/icon/circle-arrow.svg'; ?>
                    </a>
                    <div class="hamburger">
                        <svg class="hamburger-open" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <line x1="30" y1="18.75" x2="6" y2="18.75" stroke="white" stroke-width="1.5" />
                            <line x1="30" y1="27.75" x2="6" y2="27.75" stroke="white" stroke-width="1.5" />
                            <line x1="30" y1="9.75" x2="6" y2="9.75" stroke="white" stroke-width="1.5" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <div class="mMenu">
        <div class="container">
            <div class="mMenu__top">
                <div class="logo">
                    <?= $logo_url; ?>
                </div>
                <svg class="hamburger-close" width="36" height="36" viewBox="0 0 36 36" fill="none">
                    <path d="M9.5 9.5L26.5 26.5" stroke="white" stroke-width="1.5" />
                    <path d="M26.5 9.5L9.5 26.5" stroke="white" stroke-width="1.5" />
                </svg>
            </div>
            <div class="wrap">
                <?php
                wp_nav_menu([
                    'theme_location'  => 'header-menu',
                    'menu'            => 'header-menu',
                    'container'       => '',
                ]);
                ?>
                <?php if ($options['link_in_header']) : ?>
                    <a href="<?= $options['link_in_header']['url']; ?>" class="btn btnSecondary">
                        <span><?= $options['link_in_header']['title']; ?></span>
                        <?php require get_template_directory() . '/assets/icon/circle-arrow.svg'; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>