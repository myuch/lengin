<?php
$fields = get_fields();

$ln_title = $fields['ln_title'];
$ln_list = $fields['ln_list'];
$ln_link = $fields['ln_link'];

?>

<section class="lenginNumbers">
    <div class="container">

        <?php if ($ln_title) : ?>
            <h2 class="title fz_h2 tac">
                <?= $ln_title; ?>
            </h2>
        <?php endif; ?>

        <?php if ($ln_list) : ?>
            <div class="wrap">
                <div class="lenginNumbers__list">
                    <?php foreach ($ln_list as $item) : ?>
                        <div class="item">
                            <div class="item__row">
                                <span class="item-number">
                                    <?= $item['number']; ?>
                                </span>
                                <img src="<?= $item['icon']; ?>" alt="icon">
                            </div>
                            <p class="item__desc">
                                <?= $item['text']; ?>
                            </p>
                        </div>
                    <?php endforeach; ?>
                </div>
                <?php if ($ln_link) : ?>
                    <a href="<?= $ln_link['link']['url']; ?>" class="lenginNumbers__link">
                        <img src="<?= $ln_link['image']; ?>" alt="illustration">
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>
</section>

<script>
    jQuery(document).ready(function($) {
        $('.lenginNumbers-ill-1').append('<img src="<?php echo get_template_directory_uri() ?>/assets/images/hire/circle.svg" alt="circle">');
    });
</script>