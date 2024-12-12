<div class="ssModal">
    <div class="container">
        <div class="ssModal__overlay"></div>
        <div class="block">
            <div class="ssModal-close">
                <svg class="" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_568_633576720)">
                        <path d="M20.0002 17.6436L28.2502 9.39355L30.6069 11.7502L22.3569 20.0002L30.6069 28.2502L28.2502 30.6069L20.0002 22.3569L11.7502 30.6069L9.39355 28.2502L17.6436 20.0002L9.39355 11.7502L11.7502 9.39355L20.0002 17.6436Z" fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_568_6388620">
                            <rect width="40" height="40" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <div class="block-scroll">
                <?php if ($stories->have_posts()) : ?>
                    <?php while ($stories->have_posts()) : $stories->the_post(); ?>
                        <?php
                        $postID = get_the_ID();
                        $image_id = get_post_thumbnail_id($postID);
                        $position = get_field('position', $postID);
                        $logo = get_field('logo', $postID);
                        $description = get_field('description', $postID);
                        $interviewInsights = get_field('interview_insights', $postID);
                        $jsTechnologies = get_field('js_technologies', $postID);
                        $youtube_link = get_field('youtube_link', $postID);
                        $st_linkedin = get_field('st_linkedin', $postID);
                        $st_site = get_field('st_site', $postID);
                        $project = get_field('project', $postID);
                        ?>
                        <div id="id<?= $postID; ?>" class="ssModal__card">
                            <div class="ssModal__card_wrap">
                                <div class="ssModal__card_row">
                                    <div class="ssModal__card_col">
                                        <span class="title fz_h4">
                                            Video Interview
                                        </span>
                                        <?php if ($youtube_link) : ?>
                                            <div class="ssModal__card_video">
                                                <iframe class="video-stories" width="560" height="315" src="<?= $youtube_link; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                            </div>
                                        <?php endif; ?>
                                        <div class="ssModal__card_block">
                                            <div class="ssModal__card_info">

                                                <div class="ssModal__card_content">
                                                    <div class="ssModal__card_content_top">
                                                        <span class="name fz_h6">
                                                            <?= the_title(); ?>
                                                        </span>
                                                        <?php if ($st_linkedin) : ?>
                                                            <a href="<?= $st_linkedin; ?>" class="ssModal__card-linkedin" target="_blank">
                                                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/link.svg" alt="Map" width="24" height="24">
                                                            </a>
                                                        <?php endif; ?>
                                                    </div>

                                                    <?php if ($position) : ?>
                                                        <span class="position">
                                                            <?= $position; ?>
                                                        </span>
                                                    <?php endif; ?>
                                                    <?php if ($st_site) : ?>
                                                        <div class="ssModal__card-site">
                                                            <span>Site:</span>
                                                            <a href="<?= $st_site; ?>" target="_blank">
                                                                <?= $st_site; ?>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                    <?php if ($project) : ?>
                                                        <div class="ssModal__card-site">
                                                            <span>Case portfolio:</span>
                                                            <a href="<?= get_home_url(); ?>/projects/<?= $project->post_name; ?>">
                                                                <?= get_home_url(); ?>/projects/<?= $project->post_name; ?>
                                                            </a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>

                                                <!-- Logo -->
                                                <?php if ($logo) : ?>
                                                    <img class="ssModal__card_logo" src="<?= $logo; ?>" alt="Logo">
                                                <?php endif; ?>
                                            </div>
                                            <?php if ($jsTechnologies) : ?>
                                                <div class="jsTechnologies">
                                                    <?php foreach ($jsTechnologies as $item) : ?>
                                                        <div class="jsTechnologies-item <?= $item['color']; ?>">
                                                            <?= $item['technology']; ?>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    <div class="ssModal__card_col">
                                        <?php if ($interviewInsights) : ?>
                                            <div class="interview">
                                                <span class="interview-title">
                                                    Interview insights
                                                </span>
                                                <div class="interview__scroll">
                                                    <?php foreach ($interviewInsights as $item) : ?>
                                                        <div class="interview__item">
                                                            <span class="interview__item-question">
                                                                <?= $item['question'];  ?>
                                                            </span>
                                                            <div class="interview__item-answer lh19">
                                                                <?= $item['answer'];  ?>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>