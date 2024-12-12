

<aside class="sidebar left">
    <div class="sidebarWrap stickyElements">
        <div class="sidebar__info">
            <span class="title">
                IT Blog <br> News and Insights
            </span>
            <p>Here you’ll find usefull insights and news on digital technologies and business</p>
        </div>
        <div class="tags">
            <a href="<?= get_home_url(); ?>/blog/" class="tag <?php if (get_queried_object() && $term->post_type) : ?>active<?php endif; ?>">
                All topics
                <?php if (get_queried_object() && $term->post_type) : ?>
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tag-arrow-top-right.svg" alt="Arrow">
                <?php endif; ?>
            </a>
            <?php if ($categoryPost) : ?>
                <?php foreach ($categoryPost as $tag) : ?>
                    <a href="<?= get_home_url(); ?>/category/<?= $tag->slug ?>" class="tag <?php if (get_queried_object() && $term->slug && $term->name == $tag->name) : ?>active<?php endif; ?>">
                        <?= $tag->name; ?>
                        <?php if (get_queried_object() && $term->slug && $term->name == $tag->name) : ?>
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/tag-arrow-top-right.svg" alt="Arrow">
                        <?php endif; ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</aside>

