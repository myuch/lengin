<!--
    Template name: Services
-->

<?php
get_header();
$fields = get_fields();
$options = get_fields('option');
?>

<?php while (have_posts()) : the_post(); ?>

<?php the_content(); ?>

    <?php get_footer(); ?>

<?php endwhile; ?>