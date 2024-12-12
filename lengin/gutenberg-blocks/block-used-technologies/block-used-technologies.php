<?php
$fields = get_fields();
$options = get_fields('option');

$ut_title = $fields['ut_title'];
$ut_subtitle = $fields['ut_subtitle'];
$ut_content = $fields['ut_content'];
$terms = get_the_terms(get_the_ID(), 'portfolio-technologies');

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="usedTechnologies <?= $sPadding; ?>">
    <div class="container">

        <?php if ($ut_title) : ?>
            <h2 class="title fz_h2">
                <?= $ut_title; ?>
            </h2>
        <?php endif; ?>

        <?php if ($ut_subtitle) : ?>
            <p class="usedTechnologies-subtitle">
                <?= $ut_subtitle; ?>
            </p>
        <?php endif; ?>

        <div class="wrap">
            <?php if ($terms) : ?>
                <div class="usedTechnologies__list">
                    <?php foreach ($terms as $item) : ?>
                        <?php
                        $itemID = $item->term_id;
                        $logo = get_field('pt_logo', $item);
                        ?>
                        <div class="usedTechnologies__item">
                            <div class="usedTechnologies__item_block">
                                <img class="usedTechnologies__item-figure" src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tech-figure.svg" alt="Figure">
                                <img class="usedTechnologies__item-logo" src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>">
                            </div>
                            <span><?= $item->name; ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>

        <?php if ($ut_content) : ?>
            <div class="usedTechnologies__content articleStyles">
                <?= $ut_content; ?>
            </div>
        <?php endif; ?>

    </div>
</section>