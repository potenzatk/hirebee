<?php
/**
 * User dashboard main page content template
 *
 * @package HireBee\Templates
 * @since 1.0.0
 *
 */
?>

<h2><i class="icon i-activity"></i><?php _e( 'Recent Activity', APP_TD  ); ?></h2>

	<div class="row activity-wrapper">
		<div class="large-12 columns activity">

		<?php if ( $activity->results ) : ?>

				<?php foreach ( $activity->results as $notification ) : ?>

						<div class="row">
							<div class="large-12 columns entry">

								<div class="large-9 small-9 columns notification-message">
									<?php echo $notification->message; ?>
									<br/><small class="notification-time"><?php echo appthemes_display_date( $notification->time ); ?></small>
								</div>

								<?php if ( $notification->action ) { ?>
									<div class="large-3 small-3 columns notification-action">
										<a class="button tiny right" href="<?php echo esc_url( $notification->action ); ?>"><i class="icon i-view"></i></a>
									</div>
								<?php } ?>
							</div>

							<hr/>

						</div>

				<?php endforeach; ?>

				<a class="button primary small" href="<?php echo esc_url( hrb_get_dashboard_url_for( 'notifications' ) ); ?>"><?php _e( 'View All', APP_TD ); ?></a>

			<?php else : ?>

				<h5 class="no-results"><?php _e( 'Nothing new to show.', APP_TD ); ?></h5>

			<?php endif; ?>

		</div>
	</div>
