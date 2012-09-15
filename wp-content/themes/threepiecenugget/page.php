<?php get_header(); ?>

<!-- START page.php -->

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article>
		<?php the_content(); ?>
	</article>
    <?php endwhile; else: ?>
    <?php endif; ?>

<!-- END page.php -->

<?php get_footer(); ?>