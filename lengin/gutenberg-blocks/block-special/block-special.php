<?php
$fields = get_fields();
$options = get_fields('option');

$sp_list = $fields['sp_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="mSpecial <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">
        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>
        <div class="mSpecial__block">
            <div class="wrap">
                <?php if ($fields['sp_header']) : ?>
                    <div class="mSpecial__header">
                        <span class="fz_h3">
                            <?= $fields['sp_header']; ?>
                        </span>
                        <svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2368_23369)">
                                <path d="M12.936 12.6402L43.0734 42.7776M43.0734 42.7776L43.0734 16.4074M43.0734 42.7776L16.7032 42.7776" stroke="#B0B3C1" stroke-width="4" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2368_23369">
                                    <rect width="56" height="56" fill="white" transform="matrix(1 0 0 -1 0 56)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                <?php endif ?>
                <div class="wrapper">
                    <?php if ($sp_list) : ?>
                        <?php foreach ($sp_list as $item) : ?>
                            <div class="mSpecial__card <?= $item['color']; ?>">
                                <div class="mSpecial__top">
                                    <div class="mSpecial__icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="87" height="96" viewBox="0 0 87 96" fill="none">
                                            <path d="M46.3972 3.90153C44.6039 2.86612 42.3943 2.86612 40.601 3.90153L6.75771 23.4409C4.96433 24.4763 3.85956 26.3898 3.85956 28.4607V67.5395C3.85956 69.6103 4.96433 71.5238 6.7577 72.5592L40.6009 92.0986C42.3943 93.134 44.6039 93.134 46.3972 92.0986L80.2405 72.5592C82.0339 71.5238 83.1386 69.6103 83.1386 67.5395V28.4607C83.1386 26.3899 82.0339 24.4763 80.2405 23.4409L46.3972 3.90153Z" fill="#E84623" stroke="white" stroke-width="6" />
                                        </svg>
                                        <?php if ($item['image']) : ?>
                                            <img src="<?= $item['image']; ?>" alt="Icon image">
                                        <?php endif ?>
                                    </div>
                                    <?php if ($item['title']) : ?>
                                        <h3 class="fz_h3">
                                            <?= $item['title']; ?>
                                        </h3>
                                    <?php endif ?>
                                </div>
                                <?php if ($item['description']) : ?>
                                    <p class="description">
                                        <?= $item['description']; ?>
                                    </p>
                                <?php endif ?>

                                <?php if ($item['item']) : ?>
                                    <ul class="mSpecial__list">
                                        <?php foreach ($item['item'] as $pos) : ?>
                                            <li class="mSpecial__link">
                                                <span class="<?= $pos['color']; ?>"></span>
                                                <?php if ($pos['title']) : ?>
                                                    <p class="title">
                                                        <?= $pos['title']; ?>
                                                    </p>
                                                <? endif ?>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif ?>
                            </div>
                        <?php endforeach ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>