<?php
$author_id = get_the_author_meta('ID');
$author_name = get_the_author_meta('first_name');
$author_url = get_author_posts_url($author_id);
$author_name_last = get_the_author_meta('last_name');
$author_avatar = get_field('user_photo', 'user_' . $author_id);
$author_position = get_field('user_position', 'user_' . $author_id);
$author_bio = get_the_author_meta('description');
$author_nickname = get_the_author_meta('nickname');
?>


<div class="authorBlock">
    <div class="authorBlock__wrap">
        <div class="authorBlock__photo">
            <img src="<?= $author_avatar['url']; ?>" alt="<?= $author_name; ?> <?= $author_name_last; ?>" width="100" height="100">
        </div>
        <div class="authorBlock__content">
            <span class="authorBlock-subtitle">Written by:</span>
            <p class="authorBlock-title">
                <span><?= $author_nickname; ?></span>, <?= $author_position; ?>
            </p>
            <div class="authorBlock__desc">
                <p><?= $author_bio; ?></p>
            </div>
            <a href="<?= $author_url; ?>" class="authorBlock-link">
                <p>More posts by <?= $author_name; ?></p>
                <?php require get_template_directory() . '/assets/icon/arrow-top-right.svg'; ?>
            </a>
        </div>
    </div>
</div>