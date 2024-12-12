<?php
$fields = get_fields();
$options = get_fields('option');

$bsLinks = $options['block_success_stories'];

// Review
$select_review = $fields['select_review'];
$postID = $select_review->ID;
$review_description = get_field('description', $postID);
$review_position = get_field('position', $postID);
$review_photo = get_field('photo', $postID);
$review_photo_url = wp_get_attachment_image($review_photo['id'], 'large');
$t_linkedin = get_field('t_linkedin', $postID);


// Stories
$select_stoires = $fields['select_stoires'];
$postStoiresID = $select_stoires->ID;
$image_id = get_post_thumbnail_id($postStoiresID);
$position = get_field('position', $postStoiresID);
$logo = get_field('logo', $postStoiresID);
$description = get_field('description', $postStoiresID);
$interviewInsights = get_field('interview_insights', $postStoiresID);
$jsTechnologies = get_field('js_technologies', $postStoiresID);
$youtube_link = get_field('youtube_link', $postStoiresID);

$st_site = get_field('st_site', $postStoiresID);

$featured_image_id = get_post_thumbnail_id($select_stoires->ID);
$image_url = wp_get_attachment_image($featured_image_id, 'large');

$postSlug = get_field('slug_id', $postStoiresID);

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="clientTestimonial <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <div class="wrap">
            <?php if ($select_stoires) : ?>
                <div class="clientVideo" data-id="<?= $postSlug; ?>">
                    <img class="clientVideo-play" src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/play.svg" alt="Play" width="50" height="50">
                    <div class="clientVideo-thumbnail">
                        <?= $image_url; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="clientReview <?php if (!$select_stoires) : ?>full<?php endif; ?>">
                <svg class="clientReview-quote-icon" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.3563 12.6001C26.6729 12.6001 29.4146 14.2043 30.5813 17.4126C28.3063 38.3543 26.3521 48.8251 24.7188 48.8251H22.3563C19.8479 48.8251 18.5938 40.3959 18.5938 23.5376V19.7751C19.0604 14.9918 20.3146 12.6001 22.3563 12.6001ZM46.5938 19.7751C49.8021 20.9418 51.4062 22.1959 51.4062 23.5376C47.2063 32.1126 44.7563 42.9918 44.0563 56.1751L42.8313 57.4001H41.6938C38.4854 57.4001 36.8813 52.5584 36.8813 42.8751C38.4563 27.4751 41.6938 19.7751 46.5938 19.7751Z" fill="#FF9142" />
                </svg>
                <div class="clientReview__desc">
                    <p><?= $review_description; ?></p>
                </div>
                <div class="clientReview__info">
                    <div class="clientReview-photo">
                        <?= $review_photo_url; ?>
                    </div>
                    <div class="clientReview__content">
                        <div class="clientReview__content_wrap">
                            <div class="clientReview-name">
                                <?= $select_review->post_title; ?>
                            </div>
                            <span>•</span>
                            <div class="clientReview-position">
                                <?= $review_position; ?>
                            </div>
                        </div>
                        <?php if ($t_linkedin) : ?>
                            <a href="<?= $t_linkedin; ?>" class="clientReview-linkedin" target="_blank">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/link.svg" alt="Map" width="24" height="24">
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

        </div>

        <div class="twoButtons">
            <?php if ($bsLinks['modal_button']) : ?>
                <button id="ssModal" class="btn btnPrimary openModalForm">
                    <?= $bsLinks['modal_button']; ?>
                </button>
            <?php endif; ?>
            <?php if ($bsLinks['link']) : ?>
                <a href="<?= $bsLinks['link']['url']; ?>" class="btn btnText">
                    <?= $bsLinks['link']['title']; ?>
                    <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
                </a>
            <?php endif; ?>
        </div>

    </div>
</section>

<?php if ($select_stoires) : ?>
    <div class="ssModal ssModal__client">
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
                    <div id="sStories-<?= $postID; ?>" class="ssModal__card">
                        <div class="ssModal__card_wrap">
                            <div class="ssModal__card_row">
                                <div class="ssModal__card_col 23">
                                    <div class="ssModal__topwrap">
                                        <span class="title fz_h4">
                                            Video Interview
                                        </span>
                                        <div class="copyLink" data-url="<?= get_permalink(269); ?>">
                                            <div class="copyLink-button">
                                                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.7285 3.88396C17.1629 2.44407 19.2609 2.41383 20.4224 3.57981C21.586 4.74798 21.5547 6.85922 20.1194 8.30009L17.6956 10.7333C17.4033 11.0268 17.4042 11.5017 17.6976 11.794C17.9911 12.0863 18.466 12.0854 18.7583 11.7919L21.1821 9.35869C23.0934 7.43998 23.3334 4.37665 21.4851 2.5212C19.6346 0.663551 16.5781 0.905664 14.6658 2.82536L9.81817 7.69182C7.90688 9.61053 7.66692 12.6739 9.51519 14.5293C9.80751 14.8228 10.2824 14.8237 10.5758 14.5314C10.8693 14.2391 10.8702 13.7642 10.5779 13.4707C9.41425 12.3026 9.44559 10.1913 10.8809 8.75042L15.7285 3.88396Z" fill="#1C274C" />
                                                    <path d="M14.4851 9.47074C14.1928 9.17728 13.7179 9.17636 13.4244 9.46868C13.131 9.76101 13.1301 10.2359 13.4224 10.5293C14.586 11.6975 14.5547 13.8087 13.1194 15.2496L8.27178 20.1161C6.83745 21.556 4.73937 21.5863 3.57791 20.4203C2.41424 19.2521 2.44559 17.1408 3.88089 15.6999L6.30473 13.2667C6.59706 12.9732 6.59614 12.4984 6.30268 12.206C6.00922 11.9137 5.53434 11.9146 5.24202 12.2081L2.81818 14.6413C0.906876 16.5601 0.666916 19.6234 2.51519 21.4789C4.36567 23.3365 7.42221 23.0944 9.33449 21.1747L14.1821 16.3082C16.0934 14.3895 16.3334 11.3262 14.4851 9.47074Z" fill="#1C274C" />
                                                </svg>
                                            </div>
                                            <span class="copyLink-text">Link copied!</span>
                                        </div>
                                    </div>

                                    <?php if ($youtube_link) : ?>
                                        <div class="ssModal__card_video">
                                            <iframe class="video-stories" width="560" height="315" src="<?= $youtube_link; ?>?rel=0&autoplay=0" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                        </div>
                                    <?php endif; ?>
                                    <div class="ssModal__card_block">
                                        <div class="ssModal__card_info">

                                            <div class="ssModal__card_content">
                                                <div class="ssModal__card_content_top">
                                                    <span class="name fz_h6">
                                                        <?= $select_stoires->post_title; ?>
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
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>