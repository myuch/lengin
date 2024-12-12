<?php
$fields = get_fields();
$options = get_fields('option');

require get_template_directory() . '/template-parts/settings.php';

$page_id = get_the_ID();
$page = get_post($page_id);
$pageTitle = $page->post_name;

?>

<section class="contact <?php if ($pageTitle == 'contact-us') : ?>pageContact<?php endif; ?> <?= $sPadding; ?>">
    <div class="container">

        <div class="topContent">
            <h2 class="fz_h2 title">
                Contact us
            </h2>
        </div>

        <div class="wrap">
            <div class="contact__left">
                <div class="contactBlock">
                    <?php require get_template_directory() . '/gutenberg-blocks/block-contact/contact-form.php'; ?>
                    <?php require get_template_directory() . '/gutenberg-blocks/block-contact/contact-send.php'; ?>
                </div>
            </div>

            <div class="contact__right">
                <?php if ($pageTitle == 'contact-us') : ?>
                    <?php require get_template_directory() . '/gutenberg-blocks/block-contact/contact-info.php'; ?>
                <?php endif; ?>
                <?php require get_template_directory() . '/gutenberg-blocks/block-contact/contact-steps.php'; ?>
            </div>
        </div>

    </div>
</section>