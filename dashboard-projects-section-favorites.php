<?php
/**
 * User dashboard favorites tab section template
 *
 * @package HireBee\Templates
 * @since 1.0.0
 *
 */
?>

<div id="projects-starred">

	<div class="row">
		<div class="large-12 columns">

			<?php if ( $projects->post_count > 0 ) : ?>

				<?php while ( $projects->have_posts() ) : $projects->the_post(); ?>

					<?php appthemes_load_template( 'parts/content-project-secondary.php', array( 'content' => 'favorites' ) ); ?>

				<?php endwhile; ?>

				<!-- ad space -->
				<?php hrb_display_ad_sidebar( 'hrb-project-ads' ); ?>

				<!-- pagination -->
				<?php
					if ( $projects->max_num_pages > 1 ) {
						hrb_output_pagination( $projects,  array( 'paginate_projects' => 1 ), get_the_hrb_projects_base_url(), '#favorites' );
					}
				?>

			<?php else : ?>

				<h5 class="no-results"><?php printf( __( 'You have no favorites. <a href="%s">Browse projects</a>.', APP_TD ), esc_url( get_post_type_archive_link( HRB_PROJECTS_PTYPE ) ) ); ?></h5>

			<?php endif; ?>

		</div>
	</div>

</div>
