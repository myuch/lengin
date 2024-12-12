<?php
$fields = get_fields();

$hb_technologies = $fields['hb_technologies'];
$hb_title = $fields['hb_title'];
$hb_clutch = $fields['hb_clutch'];
$hb_modal_button = $fields['hb_modal_button'];
$hb_second_button = $fields['hb_second_button'];

$team_image = $fields['team_image'];
$team_mobile = $fields['team_mobile'];
$hero_image = $fields['hero_image'];


require get_template_directory() . '/template-parts/settings.php';

?>

<section class="hBanner 23">
    <div class="container">

        <div class="wrap">
            <div class="hBanner__title">
                <img class="hBanner-literally" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/homebanner/literally.svg" alt="Hero">
                <?php if ($hb_title) : ?>
                    <h1 class="title">
                        <?= $hb_title; ?>
                    </h1>
                <?php endif; ?>
            </div>
            <?php if ($team_mobile) : ?>
                <div class="hBanner-team-mobile">
                    <img class="hBanner-team-mobile disableLazyLoad" src="<?= $team_mobile; ?>" alt="Team">
                </div>

            <?php endif; ?>
            <div class="hBanner__buttons">
                <?php if ($hb_modal_button) : ?>
                    <button class="btnPrimary openModalForm">
                        <?= $hb_modal_button; ?>
                    </button>
                <?php endif; ?>
            </div>

        </div>

    </div>

    <div class="hBanner__bottom">
        <div class="hBanner__technologies">
            <div class="hBanner__technologies_wrap">
                <?php foreach ($hb_technologies as $item) : ?>
                    <div class="hBanner__technologies_item">
                        <div class="hBanner__technologies_icon">
                            <img class="disableLazyLoad" src="<?= $item['icon']; ?>" alt="technology">
                        </div>
                        <p><?= $item['title']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="hBanner__technologies_wrap">
                <?php foreach ($hb_technologies as $item) : ?>
                    <div class="hBanner__technologies_item">
                        <div class="hBanner__technologies_icon">
                            <img class="disableLazyLoad" src="<?= $item['icon']; ?>" alt="technology">
                        </div>

                        <p><?= $item['title']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="hBanner__clutch">
            <?php foreach ($hb_clutch as $item) : ?>
                <img src="<?= $item['image']; ?>" alt="Clutch">
            <?php endforeach; ?>
        </div>
        <?php if ($hero_image) : ?>
            <img class="hBanner-hero" src="<?= $hero_image; ?>" alt="Hero">
        <?php endif; ?>
        <?php if ($team_image) : ?>
            <img class="hBanner-team" src="<?= $team_image; ?>" alt="Team">
        <?php endif; ?>
        <img class="hBanner-bottom-gradient" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/homebanner/bottom-gradient.svg" alt="Gradient">
    </div>

</section>