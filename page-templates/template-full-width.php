<?php
/**
 * A full width (no sidebar) page template.
 *
 * Template Name: Layout: Full Width
 *
 * @package HireBee\Templates
 * @since 1.4.0
 */
?>

<div id="primary" class="content-area row">

	<div id="main" class="large-12 columns no-gradient">

		<?php appthemes_before_loop( 'page' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php appthemes_before_post( 'page' ); ?>

			<?php get_template_part( 'parts/content', 'page' ); ?>

			<?php appthemes_after_post( 'page' ); ?>

		<?php endwhile; ?>

		<?php appthemes_after_loop( 'page' ); ?>

	</div><!-- #main -->

</div><!-- #primary -->
