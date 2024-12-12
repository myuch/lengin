<div class="sCard">
    <div class="sCard__block" id="<?= $postSlug; ?>" data-id="<?= $postSlug; ?>" data-idpost="<?= $postID; ?>" >
        <?= $image_url; ?>
        <div class="sCard__info ">
            <img class="sCard-play" src="<?php echo get_stylesheet_directory_uri() ?>/assets/icon/play.svg" alt="Play" width="50" height="50">
            <div class="sCard__info_text">
                <span class="title fz_h5">
                    <?= the_title(); ?>
                </span>
                <?php if ($position) : ?>
                    <span class="sCard-position">
                        <?= $position; ?>
                    </span>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="sCard__desc">
        <?= the_excerpt(); ?>
    </div>
</div>