<?php
$fields = get_fields();

$desc = $fields['choosing_description'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="choosing">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

        <?php if ($desc) : ?>
            <div class="wrap">
                <div class="choosing__desc">
                    <?= $desc; ?>
                </div>
                <img class="choosing-ill-main" src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/choosing/main-illustration.svg" alt="illustration">
            </div>
        <?php endif; ?>

    </div>
</section>


<script>
    jQuery(document).ready(function($) {
        $('.choosing-ill-1').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/choosing/ill-1.svg" alt="Illustration">');
        $('.choosing-ill-2').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/choosing/ill-2.svg" alt="Illustration">');
        $('.choosing-ill-3').append('<img src="<?php echo get_stylesheet_directory_uri() ?>/assets/images/choosing/ill-3.svg" alt="Illustration">');
    });
</script>