<!--
    Template name: Content
-->

<?php
get_header();
$fields = get_fields();
$options = get_fields('option');
?>

<?php while (have_posts()) : the_post(); ?>

    <section class="pageContent articleStyles">
        <div class="container">

            <div class="wrap">
                <?php the_content(); ?>
            </div>

        </div>
    </section>



    <?php get_footer(); ?>

<?php endwhile; ?>