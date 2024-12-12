<?php
$fields = get_fields();
$options = get_fields('option');

$sa_list = $fields['sa_list'];
$sa_descriptions = $fields['sa_descriptions'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="sAdvantages <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <?php if ($sa_descriptions['left']) : ?>
            <div class="sAdvantages__desc">
                <div class="sAdvantages__desc_item">
                    <p><?= $sa_descriptions['left']; ?></p>
                </div>
                <div class="sAdvantages__desc_item">
                    <p><?= $sa_descriptions['right']; ?></p>
                </div>
            </div>
        <?php endif; ?>

        <div class="wrap mt48">
            <?php foreach ($sa_list as $item) : ?>
                <div class="saCard <?= $item['color']; ?>">
                    <div class="front">
                        <div class="iconBlock <?= $item['color']; ?>">
                            <img src="<?= $item['icon']['url']; ?>" alt="Icon" width="40" height="40">
                        </div>
                        <span class="title fz_h5">
                            <?= $item['title']; ?>
                        </span>
                        <svg class="saCard-arrow" width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="pathCircle" fill-rule="evenodd" clip-rule="evenodd" d="M64 0C64 8.83656 56.8366 16 48 16H32C23.1634 16 16 23.1634 16 32V48C16 56.8366 8.83656 64 0 64H16H48C56.8366 64 64 56.8366 64 48V16V0Z" fill="#03040D" />
                            <rect x="24" y="24" width="32" height="32" rx="16" fill="white" />
                            <path class="pathLine" d="M32.9998 35.9957L36.9955 39.9914M32.9998 35.9957L36.9955 32M32.9998 35.9957L42.9978 35.9957C45.4843 35.9957 47.5 38.0114 47.5 40.4978V40.4978C47.5 42.9843 45.4843 45 42.9978 45L32.9998 45" stroke="#060A21" stroke-width="1.8" />
                        </svg>
                    </div>
                    <div class="back">
                        <p class="saCard-shortDesc"><?= $item['short_description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="sAdvantagesMobile">
            <?php foreach ($sa_list as $item) : ?>
                <div class="samCard blColor <?= $item['color']; ?>">
                    <div class="samCard__top">
                        <div class="iconBlock <?= $item['color']; ?>">
                            <img src="<?= $item['icon']['url']; ?>" alt="Icon" width="40" height="40">
                        </div>
                        <div class="samCard__wrap">
                            <?php if ($item['title']) : ?>
                                <h3 class="title fz_h5">
                                    <?= $item['title']; ?>
                                </h3>
                            <?php endif; ?>
                            <svg class="samCard-arrow" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 9L12 15L6 9" stroke="#C7C9D6" stroke-width="1.5" />
                            </svg>
                        </div>
                    </div>
                    <?php if ($item['short_description']) : ?>
                        <div class="samCard__desc lh19">
                            <p><?= $item['short_description']; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>