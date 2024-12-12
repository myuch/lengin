<?php
$fields = get_fields();
$options = get_fields('option');

require get_template_directory() . '/template-parts/settings.php';

$team = new WP_Query(array(
    'post_type'      => 'team',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'order'          => 'DESC',
    // 'orderby'        => 'DESC',
));

$team_photos = $options['team_photos'];
$team_number = $options['team_number'];

$developers = $fields['developers'];

?>

<section class="team <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">
        <img class="team-illustration" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/team-arrow.svg" alt="arrow">
        <img class="team-illustration-mobile" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/team-arrow-mobile.svg" alt="arrow">
        
        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap">
            <div class="team__photos">
                <div id="team-photos-swiper" class="team__photos-swiper">
                    <div class="swiper-wrapper">
                        <?php if ($developers) : ?>
                            <?php foreach ($developers as $item) : ?>
                                <?php
                                $postID = $item->ID;
                                $image_id = get_post_thumbnail_id($postID);
                                $image_url = wp_get_attachment_image($image_id, 'large');
                                $employee_name = get_field('employee_name', $postID);
                                $employee_position = get_field('employee_position', $postID);
                                $employee_technologies = get_field('employee_technologies', $postID);
                                $employee_hobby = get_field('employee_hobby', $postID);
                                $employee_experience = get_field('employee_experience', $postID);
                                ?>
                                <div class="swiper-slide">
                                    <div class="teamEmployee">
                                        <div class="teamEmployee__photo">
                                            <?= $image_url; ?>
                                        </div>
                                        <div class="teamEmployee__content">
                                            <div class="teamEmployee__content_top">
                                                <div class="teamEmployee__content_row">
                                                    <?php if ($employee_name) : ?>
                                                        <span class="teamEmployee-name">
                                                            <?= $employee_name; ?>
                                                        </span>
                                                    <?php endif; ?>
                                                    <?php if ($employee_position) : ?>
                                                        <p>•</p>
                                                        <span class="teamEmployee-position">
                                                            <?= $employee_position; ?>
                                                        </span>
                                                    <?php endif; ?>
                                                </div>
                                                <?php if ($employee_technologies) : ?>
                                                    <span class="teamEmployee-technology">
                                                        <?= $employee_technologies; ?>
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                            <div class="teamEmployee__bottom">
                                                <?php if ($employee_hobby) : ?>
                                                    <span class="teamEmployee-hobby">
                                                        <?= $employee_hobby; ?>
                                                    </span>
                                                <?php endif; ?>
                                                <?php if ($employee_experience) : ?>
                                                    <span class="teamEmployee-experience">
                                                        <p><?= $employee_experience; ?> years</p> experience
                                                    </span>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <div class="swiper-slide">
                            <div class="team__block">
                                <div class="team__block_row">
                                    <?php foreach ($team_photos as $item) : ?>
                                        <div class="team__block_photo">
                                            <img src="<?= $item['image'] ?>" alt="">
                                        </div>
                                    <?php endforeach; ?>
                                    <div class="team__block_number">
                                        + <?= $team_number; ?>
                                    </div>
                                </div>
                                <button class="btnText openModalForm">
                                    View all developers
                                    <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div id="team-pagination" class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php if (is_admin()) : ?>
    <script src="<?= get_template_directory_uri() ?>/gutenberg-blocks/block-team/src/team.js"></script>
<?php endif; ?>