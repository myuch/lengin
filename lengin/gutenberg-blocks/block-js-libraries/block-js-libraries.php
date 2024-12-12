<?php
$options = get_fields('option');
require get_template_directory() . '/template-parts/settings.php';

$js_window = $options['js_window'];
$jscatleft = $options['js_categories_left'];
$jscatRight = $options['js_categories_right'];
$jscatBottom = $options['js_categories_bottom'];

?>

<section class="sJSCategory <?= $sPadding; ?>" style="display: none;">
    <div class="stack">
        <div class="stack__block"></div>
        <div class="stack__box">
            <svg width="56" height="56" viewBox="0 0 56 56" fill="none">
                <g clip-path="url(#clip0_640_7867)">
                    <path d="M43.0699 42.7783L12.9325 12.6408M12.9325 12.6408L12.9325 39.0111M12.9325 12.6408L39.3027 12.6408" stroke="#B0B3C1" stroke-width="4" />
                </g>
                <defs>
                    <clipPath id="clip0_640_7867">
                        <rect width="56" height="56" fill="white" transform="matrix(1 0 0 -1 0 56)" />
                    </clipPath>
                </defs>
            </svg>
            <span>
                Our tech stack
            </span>
        </div>
    </div>
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <img class="sJSCategory-line" src="<?php echo get_template_directory_uri() ?>/assets/images/sJSCategory-line.svg" alt="Lines" width="170" height="72">

        <div class="wrap">
            <div class="jsBlock ">
                <div class="leftGuides">
                    <div class="jsCategories">
                        <?php foreach ($jscatleft as $item) : ?>
                            <?php if ($item['page']) { ?>
                                <a href="<?= $item['page']; ?>" class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="36" height="36">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </a>
                            <?php } else { ?>
                                <button class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="36" height="36">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </button>
                            <?php } ?>
                        <?php endforeach ?>
                    </div>
                    <div class="leftGuides-lines">
                        <img class="desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/left-guides.svg" alt="Lines" width="134" height="296">
                        <img class="tablet" src="<?php echo get_template_directory_uri() ?>/assets/images/left-guides-mob.svg" alt="Lines" width="82" height="260">
                    </div>
                </div>
                <div class="rightGuides">
                    <div class="jsCategories">
                        <?php foreach ($jscatRight as $item) : ?>
                            <?php if ($item['page']) { ?>
                                <a href="<?= $item['page']; ?>" class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="36" height="36">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </a>
                            <?php } else { ?>
                                <button class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="36" height="36">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </button>
                            <?php } ?>
                        <?php endforeach ?>
                    </div>
                    <div class="rightGuides-lines">
                        <img class="desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/right-guides.svg" alt="Lines" width="134" height="296">
                        <img class="tablet" src="<?php echo get_template_directory_uri() ?>/assets/images/right-guides-mob.svg" alt="Lines" width="82" height="260">
                    </div>
                </div>
                <div class="jsWindow">
                    <div class="jsWindow__top">
                        <div class="jsWindow__circles">
                            <div class="jsWindow-circle"></div>
                            <div class="jsWindow-circle"></div>
                            <div class="jsWindow-circle"></div>
                        </div>
                    </div>
                    <div class="jsWindow__content">
                        <div class="jsWindow__content_wrap">
                            <div class="jsWindow__content_top">
                                <div class="jsWindow__content_icon">
                                    <img src="<?= $js_window['icon']; ?>" alt="JS" width="50" height="50">
                                </div>
                                <span class="title fz_h3">
                                    <?= $js_window['title']; ?>
                                </span>
                            </div>
                            <p><?= $js_window['short_description']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottomGuides">
                <div class="jsCategories">
                    <?php foreach ($jscatBottom as $item) : ?>
                        <?php if ($item['page']) { ?>
                            <a href="<?= $item['page']; ?>" class="jsCategory">
                                <div class="jsCategory-icon">
                                    <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="36" height="36">
                                </div>
                                <span class="jsCategory-name"><?= $item['name']; ?></span>
                            </a>
                        <?php } else { ?>
                            <button class="jsCategory">
                                <span class="jsCategory-icon">
                                    <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="36" height="36">
                                </span>
                                <span class="jsCategory-name"><?= $item['name']; ?></span>
                            </button>
                        <?php } ?>
                    <?php endforeach ?>
                </div>
                <div class="bottomGuides-lines">
                    <img class="desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/bottom-guides.svg" width="707" height="102" alt="Lines">
                    <img class="tablet" src="<?php echo get_template_directory_uri() ?>/assets/images/bottom-guides-mob.svg" alt="Lines">
                </div>
            </div>
            <div class="mobileGuides">
                <div class="jsCategories">
                    <div class="jsCategories__item">
                        <?php foreach ($jscatleft as $item) : ?>
                            <?php if ($item['page']) { ?>
                                <a href="<?= $item['page']; ?>" class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="24" height="24">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </a>
                            <?php } else { ?>
                                <button class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="24" height="24">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </button>
                            <?php } ?>
                        <?php endforeach ?>
                    </div>
                    <div class="jsCategories__item">
                        <?php foreach ($jscatRight as $item) : ?>
                            <?php if ($item['page']) { ?>
                                <a href="<?= $item['page']; ?>" class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="24" height="24">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </a>
                            <?php } else { ?>
                                <button class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="24" height="24">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </button>
                            <?php } ?>
                        <?php endforeach ?>
                    </div>
                    <div class="jsCategories__item">
                        <?php foreach ($jscatBottom as $item) : ?>
                            <?php if ($item['page']) { ?>
                                <a href="<?= $item['page']; ?>" class="jsCategory">
                                    <div class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="24" height="24">
                                    </div>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </a>
                            <?php } else { ?>
                                <button class="jsCategory">
                                    <span class="jsCategory-icon">
                                        <img src="<?= $item['icon']; ?>" alt="<?= $item['name']; ?>" width="24" height="24">
                                    </span>
                                    <span class="jsCategory-name"><?= $item['name']; ?></span>
                                </button>
                            <?php } ?>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="mobileGuides-lines">
                    <img class="desktop" src="<?php echo get_template_directory_uri() ?>/assets/images/mobile-guides.svg" alt="Lines" width="25" height="398">
                </div>
            </div>
        </div>

    </div>
</section>