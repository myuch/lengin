<?php
$postID = get_the_ID();
$image_id = get_post_thumbnail_id(get_the_ID());
$image_url = wp_get_attachment_image($image_id, 'post-card');
$country_flag = get_field('country_flag', $postID);
$project_logo = get_field('project_logo', $postID);
$categoryPost = get_the_terms($postID, 'portfolio-technologies');
?>
<div class="projectCard">
    <div class="projectCard__content">
        <?php if ($project_logo) : ?>
            <img class="projectCard-logo" src="<?= $project_logo['url']; ?>" alt="Logo">
        <?php endif; ?>
        <h3 class="title fz_h5">
            <?= the_title(); ?>
        </h3>
        <div class="projectCard__desc">
            <?= the_excerpt(); ?>
        </div>
        <a href="<?= the_permalink(); ?>" class="readMore">
            Read more
            <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
        </a>
    </div>
    <a href="<?= the_permalink(); ?>" class="projectCard__img">
        <img class="projectCard-flag" src="<?= $country_flag['url']; ?>" alt="Flag">
        <?= $image_url; ?>
    </a>
</div>

<!-- <?php if ($categoryPost) : ?>
    <div class="cardTags">
        <?php foreach ($categoryPost as $item) : ?>
            <?php
                $pt_color = get_field('pt_color', $item);
            ?>
            <a href="<?= get_home_url(); ?>/portfolio-technologies/<?= $item->slug; ?>" class="cardTags-item <?= $pt_color; ?>">
                <?= $item->name; ?>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?> -->