<div class="tags">
    <a href="<?= get_home_url(); ?>/portfolio/" class="tag <?php if (get_queried_object() && $term->post_type) : ?>active<?php endif; ?>">
        All topics
        <?php if (get_queried_object() && $term->post_type) : ?>
            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tag-arrow-top-right.svg" alt="Arrow">
        <?php endif; ?>
    </a>
    <?php foreach ($category as $tag) : ?>
        <?php
        $pt_hide = get_field('pt_hide', $tag);
        ?>
        <a href="<?= get_home_url(); ?>/portfolio-technologies/<?= $tag->slug ?>" class="tag <?php if ($pt_hide) : ?>hide<?php endif; ?> <?php if (get_queried_object() && $term->slug && $term->name == $tag->name) : ?>active<?php endif; ?>">
            <?= $tag->name; ?>
            <?php if (get_queried_object() && $term->slug && $term->name == $tag->name) : ?>
                <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tag-arrow-top-right.svg" alt="Arrow">
            <?php endif; ?>
        </a>
    <?php endforeach; ?>
</div>