<?php
$fields = get_fields();

$apply_list = $fields['apply_list'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="apply">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>


        <?php if ($apply_list) : ?>
            <div class="wrap">
                <?php foreach ($apply_list as $item) : ?>
                    <div class="item">
                        <?php if ($item['icon']) : ?>
                            <div class="item-icon">
                                <img src="<?= $item['icon']; ?>" alt="icon">
                            </div>
                        <?php endif; ?>
                        <?php if ($item['title']) : ?>
                            <span class="item-title">
                                <?= $item['title']; ?>
                            </span>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>