<?php
/**
 * The terms of agreement page template
 *
 * Template Name: Site Terms
 *
 * @package HireBee\Templates
 * @since 1.0.0
 */
?>

<div id="primary" class="content-area row">

	<div id="main" class="large-8 columns">

		<?php appthemes_before_loop( 'page' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php appthemes_before_post( 'page' ); ?>

			<?php get_template_part( 'parts/content', 'page' ); ?>

			<?php appthemes_after_post( 'page' ); ?>

		<?php endwhile; ?>

		<?php appthemes_after_loop( 'page' ); ?>

	</div><!-- #main -->

	<?php get_sidebar( app_template_base() ); ?>

</div><!-- #primary -->
