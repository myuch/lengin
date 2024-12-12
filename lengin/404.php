<?php
/* 404 Page Template */
get_header();
?>

<section class="page404">
    <div class="container">

        <div class="wrap">
            <h1 class="fz_h1 title">404</h1>
            <span class="page404-title">
                Error
            </span>
            <span class="page404-subtitle">
                It seems we could not find the page you were looking for
            </span>
            <a href="<?= get_home_url(); ?>" class="btnPrimary openModalForm">
                Back to home
            </a>
        </div>

    </div>
</section>

<?php get_footer(); ?>