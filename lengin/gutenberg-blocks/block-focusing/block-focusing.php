<?php
$fields = get_fields();
$options = get_fields('option');

$focList = $fields['focusing_list'];

$focImage = wp_get_attachment_image($fields['focusing_image']['id'], 'large');

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="focusing <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap mt48">
            <?php if ($focImage) : ?>
                <div class="focusImg">
                    <?= $focImage; ?>
                </div>
            <?php endif; ?>
            <?php if ($focList) : ?>
                <div class="focusList">
                    <svg class="focusList-lines" width="197" height="527" viewBox="0 0 197 527" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M196.5 1H108C94.7452 1 84 11.7452 84 25V239.25C84 252.505 73.2548 263.25 60 263.25H25" stroke="#1F212F" stroke-width="2" stroke-dasharray="4 4" />
                        <path d="M0 263H59C72.2548 263 83 273.745 83 287V501.25C83 514.505 93.7452 525.25 107 525.25H196.5" stroke="#1F212F" stroke-width="2" stroke-dasharray="4 4" />
                        <path d="M196.5 263H131" stroke="#1F212F" stroke-width="2" stroke-dasharray="4 4" />
                        <path d="M196.5 134.5H166.5C153.245 134.5 142.5 145.245 142.5 158.5V239C142.5 252.255 131.755 263 118.5 263H74" stroke="#1F212F" stroke-width="2" stroke-dasharray="4 4" />
                        <path d="M196.5 391.5H166.5C153.245 391.5 142.5 380.755 142.5 367.5V287C142.5 273.745 131.755 263 118.5 263H73.5" stroke="#1F212F" stroke-width="2" stroke-dasharray="4 4" />
                    </svg>
                    <svg class="focusList-lines-mobile" width="120" height="169" viewBox="0 0 120 169" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M119.5 1H89.5C76.2452 1 65.5 11.7452 65.5 25V89C65.5 102.255 54.7548 113 41.5 113H25C11.7452 113 1 123.745 1 137V169" stroke="#1F212F" stroke-width="2" stroke-dasharray="4 4" />
                    </svg>
                    <?php foreach ($focList as $key => $item) : ?>
                        <div class="focusList__item">
                            <div class="focusList__number">
                                <span>0<?= $key + 1; ?></span>
                                <svg width="90" height="100" viewBox="0 0 90 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M41.5154 2.15771C43.675 0.916645 46.3315 0.916647 48.4911 2.15771L84.8641 23.0603C87.0368 24.3089 88.3763 26.6236 88.3763 29.1295V70.8705C88.3763 73.3764 87.0368 75.6911 84.8641 76.9397L48.4911 97.8423C46.3315 99.0834 43.675 99.0834 41.5154 97.8423L5.14236 76.9397C2.96968 75.6911 1.63017 73.3764 1.63017 70.8705V29.1295C1.63017 26.6236 2.96968 24.3089 5.14236 23.0603L41.5154 2.15771Z" fill="#03040D" stroke="#1F212F" stroke-width="2" />
                                </svg>
                            </div>
                            <div class="focusList__content">
                                <span class="title fz_h5">
                                    <?= $item['title']; ?>
                                </span>
                                <p><?= $item['description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

    </div>
</section>