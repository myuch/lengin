<?php
$fields = get_fields();

$title = $fields['tdi_title'];
$desc = $fields['tdi_short_description'];
$image = $fields['tdi_image'];

?>

<section class="titleImageDesc">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <div class="wrap">
            <?php if ($image) : ?>
                <img class="disableLazyLoad" src="<?= $image; ?>" alt="Image">
            <?php endif; ?>
        </div>

    </div>
</section>