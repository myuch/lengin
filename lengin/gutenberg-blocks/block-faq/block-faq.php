<?php

$faq = get_field('faq');
$bfLinks = get_field('block_faq', 'option');

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="sFAQ <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <?php if ($faq) : ?>
            <div class="wrap">
                <div class="faq">
                    <?php foreach ($faq as $item) : ?>
                        <div class="faq__item">
                            <?php if ($item['question']) : ?>
                                <div class="faq__question">
                                    <h3 class="title fz_h6">
                                        <?= $item['question']; ?>
                                    </h3>
                                    <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 20.5L16 12.5L8 20.5" stroke="#C7C9D6" stroke-width="3" />
                                    </svg>
                                </div>
                            <?php endif; ?>
                            <?php if ($item['answer']) : ?>
                                <div class="faq__answer lh19">
                                    <?= $item['answer']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- <?php if ($bfLinks['modal_button']) : ?>
            <button class="btnText openModalForm">
                <?= $bfLinks['modal_button']; ?>
                <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
            </button>
        <?php endif; ?> -->

    </div>
</section>