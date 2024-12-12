<?php
$fields = get_fields();

$list = $fields['ts_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="taskSolution">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <?php if ($list) : ?>
            <div class="wrap">
                <?php foreach ($list as $key => $item) : ?>
                    <?php
                    $select_review = $item['select_review'];
                    $postID = $select_review->ID;
                    $review_description = get_field('description', $postID);
                    $link_platform = get_field('link_for_platforms', $postID);
                    $review_position = get_field('position', $postID);
                    $review_photo = get_field('photo', $postID);
                    $review_photo_url = wp_get_attachment_image($review_photo['id'], 'large');
                    $t_linkedin = get_field('t_linkedin', $postID);
                    ?>
                    <div class="taskSolution__item">
                        <div class="taskSolution__task">
                            <h3 class="title">
                                <?= $item['task']['title']; ?>
                            </h3>
                            <p>
                                <?= $item['task']['description']; ?>
                            </p>
                            <img class="taskSolution__task-ill" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solutions/solution-arrow-6.svg" alt="Illustration">
                        </div>
                        <div class="taskSolution__solution">
                            <h3 class="title">
                                <?= $item['solution']['title']; ?>
                            </h3>
                            <p>
                                <?= $item['solution']['description']; ?>
                            </p>
                        </div>
                        <div class="taskSolution__review">
                            <?php if ($link_platform) : ?>
                                <a href="<?= $link_platform; ?>" class="taskSolution__review_clutch" target="_blank">
                                    <span>Rewiew on <p>Clutch</p></span>
                                    <img class="taskSolution__review_clicon" src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/clutch-icon-white.svg" alt="Clutch">
                                </a>
                            <?php endif; ?>
                            <p>
                                <?= $review_description; ?>
                            </p>
                            <div class="taskSolution__review_row">
                                <div class="taskSolution__review_photo">
                                    <img src="<?= $review_photo_url; ?>" alt="Photo">
                                </div>
                                <div class="taskSolution__review_content">
                                    <span class="taskSolution__review-name">
                                        <?= $select_review->post_title; ?>
                                        <?php if ($t_linkedin) : ?>
                                            <a href="<?= $t_linkedin; ?>" class="taskSolution__review-linkedin" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/link.svg" alt="Map" width="24" height="24">
                                            </a>
                                        <?php endif; ?>
                                    </span>
                                    <div class="taskSolution__review_info">
                                        <span class="taskSolution__review-position">
                                            <?= $review_position; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($key === 0) : ?>
                            <img class="taskSolution-ill taskSolution-ill-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solutions/solution-arrow-1.svg" alt="Illustration">
                            <img class="taskSolution-ill taskSolution-ill-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solutions/solution-arrow-2.svg" alt="Illustration">
                        <?php endif; ?>

                        <?php if ($key === 1) : ?>
                            <img class="taskSolution-ill taskSolution-ill-3" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solutions/solution-arrow-3.svg" alt="Illustration">
                        <?php endif; ?>
                        <?php if ($key === 2) : ?>
                            <img class="taskSolution-ill taskSolution-ill-4" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solutions/solution-arrow-4.svg" alt="Illustration">
                            <img class="taskSolution-ill taskSolution-ill-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/solutions/solution-arrow-5.svg" alt="Illustration">
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>