<?php

$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('first_name');
$author_url = get_author_posts_url($author_id);
$author_name_last = get_the_author_meta('last_name');
$author_nickname = get_the_author_meta('nickname');
$author_avatar = get_field('user_photo', 'user_' . $author_id);
$author_bio = get_the_author_meta('description');

?>

<div class="article__preview">
    <div class="article__preview_top">
        <div class="cardTags links">
            <?php foreach ($category as $tag) : ?>
                <?php
                $bc_color = get_field('bc_color', $tag);
                ?>
                <a href="<?= get_home_url(); ?>/category/<?= $tag->slug ?>" class="cardTags-item <?= $bc_color; ?>">
                    <?= $tag->name; ?>
                </a>
            <?php endforeach; ?>
        </div>
        <div class="article-time postTime">
            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 20C4.477 20 0 15.523 0 10C0 4.477 4.477 0 10 0C15.523 0 20 4.477 20 10C20 15.523 15.523 20 10 20ZM10 18C12.1217 18 14.1566 17.1571 15.6569 15.6569C17.1571 14.1566 18 12.1217 18 10C18 7.87827 17.1571 5.84344 15.6569 4.34315C14.1566 2.84285 12.1217 2 10 2C7.87827 2 5.84344 2.84285 4.34315 4.34315C2.84285 5.84344 2 7.87827 2 10C2 12.1217 2.84285 14.1566 4.34315 15.6569C5.84344 17.1571 7.87827 18 10 18ZM11 10H15V12H9V5H11V10Z" fill="#747683" />
            </svg>
            <?= do_shortcode('[read_meter]'); ?>
        </div>
    </div>
    <h1 class="title fz_h4">
        <?= the_title(); ?>
    </h1>
    <div class="article__preview_bottom">
        <span class="article-authorName">
            By <a href="<?= $author_url; ?>"><?= $author_nickname; ?></a>
        </span>
        <div class="article__preview-line"></div>
        <span class="article-date"><?= get_the_date('M d, Y'); ?></span>
    </div>
    <div class="tableContents">
        <?= do_shortcode('[ez-toc]'); ?>
    </div>
</div>