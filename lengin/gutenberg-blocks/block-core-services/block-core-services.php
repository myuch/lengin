<?php
$fields = get_fields();
$options = get_fields('option');

$wh_list = $fields['wh_list'];
$whListCount = count($wh_list);

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="weHelp <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="weHelpTab mt48 lenSel">
            <?php if ($whListCount > 1) : ?>
                <select class="weHelp__select" name="development-expertise">
                    <?php foreach ($wh_list as $key => $item) : ?>
                        <option value="weHelpTab-<?= $key; ?>"><?= $item['title']; ?></option>
                    <?php endforeach; ?>
                </select>
                <div class="weHelpTab__nav">
                    <div class="weHelpTab__nav-line"></div>
                    <div class="weHelpTab__nav_wrap">
                        <?php foreach ($wh_list as $key => $item) : ?>
                            <div class="weHelpTab__nav_item <?php if ($key == 0) : ?>active<?php endif; ?>" data-id="weHelpTab-<?= $key; ?>">
                                <?= $item['title']; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ($wh_list) : ?>
                <div class="weHelpTab__content">
                    <?php foreach ($wh_list as $key => $item) : ?>
                        <div id="weHelpTab-<?= $key; ?>" class="weHelpTab__content_item">
                            <div class="weHelpTab__content_wrap">
                                <?php foreach ($item['categories'] as $item) : ?>
                                    <?php
                                    $de_color = get_field('de_color', $item->ID);
                                    $de_icon = get_field('de_icon', $item->ID);
                                    ?>
                                    <a href="<?= $item->guid; ?>" class="weHelpCard">
                                        <div class="weHelpCard__top">
                                            <div class="iconBlock wShadow <?= $de_color; ?>">
                                                <img src="<?= $de_icon; ?>" alt="Icon" width="40" height="40">
                                            </div>
                                            <?php if ($item->post_title) : ?>
                                                <span class="title fz_h5">
                                                    <?= $item->post_title; ?>
                                                </span>
                                            <?php endif; ?>
                                        </div>
                                        <div class="weHelpCard__bottom">
                                            <div class="btn btnDarkArrow">
                                                More
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/arrow-top-right-white.svg" width="25" height="25" alt="Arrow">
                                            </div>
                                        </div>
                                        <img class="weHelpCard-icon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/help-icon-mob.svg" alt="Arrow">
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>