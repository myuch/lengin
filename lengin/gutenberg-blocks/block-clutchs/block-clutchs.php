<?php
$fields = get_fields();

$clutchs = $fields['clutchs'];
$illustration_left = $fields['illustration_left'];
$illustration_right = $fields['illustration_right'];

?>


<section class="clutchs">
    <div class="container">

        <div class="wrap">
            <img class="clutchs__ill-left" src="<?= $illustration_left; ?>" alt="Illustration">
            <img class="clutchs__ill-right" src="<?= $illustration_right; ?>" alt="Illustration">
            <div class="wrapper">
                <?php foreach ($clutchs as $item) : ?>
                    <img src="<?= $item['image'] ?>" alt="clutch">
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>