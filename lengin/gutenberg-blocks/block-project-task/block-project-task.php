<?php
$fields = get_fields();

$list = $fields['pt_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="projectTask">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap">
            <?php foreach ($list as $key => $item) : ?>
                <?php
                // Review
                $select_review = $item['review'];
                $postID = $select_review->ID;
                $review_description = get_field('description', $postID);
                $link_platform = get_field('link_for_platforms', $postID);
                $review_position = get_field('position', $postID);
                $review_photo = get_field('photo', $postID);
                $review_photo_url = wp_get_attachment_image($review_photo['id'], 'large');
                $t_linkedin = get_field('t_linkedin', $postID);

                // Project
                $project = $item['project'];
                $project_id = $project->ID;
                $project_thumbnail = get_the_post_thumbnail($project_id, 'large');
                $permalink = get_permalink($project->ID);

                ?>
                <div class="projectTask__item">
                    <div class="projectTask__content">
                        <h3 class="title">
                            <?= $item['title']; ?>
                        </h3>
                        <div class="projectTask__deck articleStyles ">
                            <?= $item['description']; ?>
                        </div>
                        <div class="projectTask__review">
                            <p>
                                <?= $review_description; ?>
                            </p>
                            <div class="projectTask__review_row">
                                <div class="taskSolution__review_photo">
                                    <img src="<?= $review_photo_url; ?>" alt="Photo">
                                </div>
                                <div class="projectTask__review_content">
                                    <span class="projectTask__review-name">
                                        <?= $select_review->post_title; ?>
                                        <?php if ($t_linkedin) : ?>
                                            <a href="<?= $t_linkedin; ?>" class="projectTask__review-linkedin" target="_blank">
                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/link.svg" alt="Map" width="24" height="24">
                                            </a>
                                        <?php endif; ?>
                                    </span>
                                    <div class="projectTask__review_info">
                                        <span class="projectTask__review-position">
                                            <?= $review_position; ?>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($key === 0) : ?>
                            <img class="projectTask-arrow-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/projecttask/project-task-arrow-1.svg" alt="arrow">
                            <img class="projectTask-arrow-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/projecttask/project-task-arrow-2.svg" alt="arrow">
                        <?php endif; ?>
                        <?php if ($key === 1) : ?>
                            <img class="projectTask-arrow-3" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/projecttask/project-task-arrow-3.svg" alt="arrow">
                        <?php endif; ?>
                    </div>
                    <div class="projectTask__project">
                        <p class="shortDesc">
                            <?= $item['short_description']; ?>
                        </p>
                        <div class="projectTask__project-image">
                            <?= $project_thumbnail; ?>
                        </div>
                        <a href="<?= $permalink; ?>" class="btnText">
                            View full case
                            <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>