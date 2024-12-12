<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>
	<main class="main">
		<?php the_content(); ?>
	</main>
	<?php get_footer(); ?>
<?php endwhile; ?>

