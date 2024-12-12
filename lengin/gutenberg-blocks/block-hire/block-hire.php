<?php
$fields = get_fields();

$hire_title = $fields['hire_title'];
$hire_list = $fields['hire_list'];
$imageLine = get_template_directory_uri() . '/assets/images/hire/line.svg';

?>

<section class="hire">
    <div class="container">

        <?php if ($hire_title) : ?>
            <h2 class="title fz_h2">
                <?= $hire_title; ?>
            </h2>
        <?php endif; ?>

        <?php if ($hire_list) : ?>
            <div class="wrap">
                <img class="hire-line" src="<?= $imageLine; ?>" alt="line">
                <div class="wrapper">
                    <?php foreach ($hire_list as $item) : ?>
                        <div class="item">
                            <div class="item__row">
                                <?php if ($item['title']) : ?>
                                    <span class="item-title">
                                        <?= $item['title']; ?>
                                    </span>
                                <?php endif; ?>
                                <?php if ($item['number']) : ?>
                                    <img class="item-number" src="<?= $item['number']; ?>" alt="number">
                                <?php endif; ?>

                            </div>
                            <?php if ($item['description']) : ?>
                                <div class="item__desc">
                                    <?= $item['description']; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endif; ?>

    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $('.hire-ill-1').append('<img src="<?php echo get_template_directory_uri() ?>/assets/images/hire/circle.svg" alt="circle">');
    });
</script>