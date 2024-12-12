<?php
$post_id = get_the_ID();
$category_ids = wp_get_post_categories($post_id);
$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('first_name');
$author_name_last = get_the_author_meta('last_name');

$author_avatar = get_field('user_photo', 'user_' . $author_id);

?>

<a href="<?= the_permalink(); ?>" class="blogCard">
    <div class="blogCard__top">
        <div class="blogCard__author">
            <div class="blogCard__author_photo">
                <img src="<?= $author_avatar['url']; ?>" alt="<?= $author_name; ?> <?= $author_name_last; ?>" width="60" height="60">
            </div>
            <span class="blogCard__author_name">By <?= $author_name; ?> <?= $author_name_last; ?></span>
        </div>
        <span class="blogCard-date"><?= get_the_date('M d, Y'); ?></span>
    </div>
    <h2 class="title fz_h5">
        <?= the_title(); ?>
    </h2>
    <div class="blogCard__desc">
        <?= the_excerpt(); ?>
    </div>
    <div class="blogCard__bottom">
        <div class="cardTags">
            <?php foreach ($category_ids as $category_id) : ?>
                <?php
                $category = get_category($category_id);
                $bc_color = get_field('bc_color', $category);
                ?>
                <div class="cardTags-item <?= $bc_color; ?>">
                    <?= $category->name; ?>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="blogCard__time postTime">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM11 10H15V12H9V5H11V10Z" fill="#747683" />
            </svg>
            <?= do_shortcode('[read_meter]'); ?>
        </div>
    </div>
</a>