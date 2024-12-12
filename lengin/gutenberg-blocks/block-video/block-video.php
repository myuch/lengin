<?php
$fields = get_fields();

$video_id = $fields['video_id'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="sVideo">
    <div class="container">

        <?php if ($video_id) : ?>
            <div class="wrap">
                <img class="sVideo__illustration-6" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/video/video-6.svg" alt="Illustration">
                <iframe src="https://www.youtube.com/embed/<?= $video_id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
                </iframe>
                <img class="sVideo__illustration-1" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/video/video-1.svg" alt="Illustration">
                <img class="sVideo__illustration-2" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/video/video-2.svg" alt="Illustration">
                <img class="sVideo__illustration-3" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/video/video-3.svg" alt="Illustration">
                <img class="sVideo__illustration-4" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/video/video-4.svg" alt="Illustration">
                <img class="sVideo__illustration-5" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/video/video-5.svg" alt="Illustration">
            </div>
        <?php endif; ?>

    </div>
</section>