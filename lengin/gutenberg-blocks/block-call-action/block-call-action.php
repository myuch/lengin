<?php
$fields = get_fields();

$ca_title = $fields['ca_title'];
$ca_subtitle = $fields['ca_subtitle'];
$ca_button = $fields['ca_button'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="callAction <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>


        <?php if ($ca_title) : ?>
            <div class="callActionBlock">
                <span class="callActionBlock-title">
                    <?= $ca_title; ?>
                </span>
                <?php if ($ca_subtitle) : ?>
                    <p><?= $ca_subtitle; ?></p>
                <?php endif; ?>
                <?php if ($ca_button) : ?>
                    <div class="callActionBlock__bottom">
                        <button class="btn btnPrimary openModalForm">
                            <?= $ca_button; ?>
                        </button>
                        <svg class="desktop" width="256" height="80" viewBox="0 0 256 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M56.5 0C38.8269 0 24.5 14.3269 24.5 32V56C24.5 69.2548 13.7548 80 0.5 80H24.5H231.5H255.5C242.245 80 231.5 69.2548 231.5 56V32C231.5 14.3269 217.173 0 199.5 0H56.5Z" fill="#03040D" />
                        </svg>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</section>