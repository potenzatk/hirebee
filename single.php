<?php
/**
 * The single post template file
 *
 * @package HireBee\Templates
 * @since 1.0.0
 */
?>

<div id="primary" class="content-area row">

	<div id="main" class="large-8 columns">

		<?php appthemes_before_loop( 'post' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php appthemes_before_post(); ?>

			<?php get_template_part( 'parts/content', get_post_type() ); ?>

			<?php appthemes_after_post(); ?>

		<?php endwhile; ?>

		<?php appthemes_after_loop( 'post' ); ?>

	</div><!-- #main -->

	<?php get_sidebar( 'blog' ); ?>

</div><!-- #primary -->
