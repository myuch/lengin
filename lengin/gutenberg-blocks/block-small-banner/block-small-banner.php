<?php
$fields = get_fields();
$options = get_fields('option');

$faq = $fields['faq'];

require get_template_directory() . '/template-parts/settings.php';

?>

<section class="smallBanner <?= $sPadding; ?> <?= $nameTheme; ?>">
    <div class="container">

        <?php require get_template_directory() . '/template-parts/top-content.php'; ?>

    </div>
</section>