<?php
$fields = get_fields();
$options = get_fields('option');

$fprojects = $fields['projects'];
// $fp_link = $fields['fp_link'];
// $fp_button = $fields['fp_button'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="rProjects <?= $sPadding; ?> <?= $nameTheme; ?>">

    <div class="container">
        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap mt48">
            <div class="swiper__buttons sbmt48">
                <div id="rProjects-swiper-button-prev" class="swiper-button-prev">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M40 32H24M24 32L31 25M24 32L31 39" stroke="#C7C9D6" stroke-width="1.5" />
                        <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                    </svg>
                </div>
                <div id="rProjects-swiper-button-next" class="swiper-button-next">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24 32H40M40 32L33 25M40 32L33 39" stroke="#C7C9D6" stroke-width="1.5" />
                        <rect x="0.75" y="0.75" width="62.5" height="62.5" rx="31.25" stroke="#C7C9D6" stroke-width="1.5" />
                    </svg>
                </div>
            </div>
        </div>

    </div>

    <div class="wrapper">
        <div id="rProjectsSwiper" class="swiper">
            <div class="swiper-wrapper">
                <?php if ($fprojects) : ?>
                    <?php foreach ($fprojects as $item) : ?>
                        <?php
                        $thumbnail = get_the_post_thumbnail($item->ID, 'large');
                        $category = get_field('category', $item->ID);
                        $country_flag = get_field('country_flag', $item->ID);
                        $jsTechnologies = get_the_terms($item->ID, 'portfolio-technologies');

                        ?>
                        <div class="swiper-slide">
                            <div class="rpCard">
                                <a href="<?= get_home_url(); ?>/projects/<?= $item->post_name; ?>" class="rpCard-link">
                                    <div class="rpCard-thumbnail">
                                        <?= $thumbnail; ?>
                                        <div class="rpCard__block">
                                            <div class="rpCard-flag">
                                                <img src="<?= $country_flag['sizes']['thumbnail']; ?>" alt="<?= $country_flag['alt']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="rpCard__content">
                                        <div class="rpCard__content_top">
                                            <h3 class="title fz_h5">
                                                <?= $item->post_title; ?>
                                            </h3>
                                            <div class="rpCard__desc">
                                                <p><?= $item->post_excerpt; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php if ($jsTechnologies) : ?>
                                    <div class="cardTags">
                                        <?php foreach ($jsTechnologies as $item) : ?>
                                            <?php
                                            $pt_color = get_field('pt_color', $item);
                                            ?>
                                            <a href="<?= get_home_url(); ?>/portfolio-technologies/<?= $item->slug; ?>" class="cardTags-item <?= $pt_color; ?>">
                                                <?= $item->name; ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div id="rProjects-pagination" class="swiper-pagination"></div>
        </div>
    </div>

</section>

<?php if (is_admin()) : ?>
    <script src="<?= get_template_directory_uri() ?>/gutenberg-blocks/block-recent-projects/src/recent-projects.js"></script>
<?php endif; ?>