<?php
$fields = get_fields();

$desktop_image = $fields['desktop_image'];
$mobile_image = $fields['mobile_image'];

?>

<section class="photoPeople">
    <div class="container">

        <?php if ($desktop_image) : ?>
            <img class="photoPeople-desktop" src="<?= $desktop_image; ?>" alt="People">
        <?php endif; ?>
        
        <?php if ($mobile_image) : ?>
            <img class="photoPeople-mobile" src="<?= $mobile_image; ?>" alt="People">
        <?php endif; ?>

    </div>
</section>