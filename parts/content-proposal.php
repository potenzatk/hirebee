<?php
/**
 * Proposal loop content template.
 *
 * @package HireBee\Templates
 * @since 1.0.0
 *
 */

$proposal_hidden = __( 'N/A', APP_TD );
?>

<div class="row single-bid">

	<div class="large-2 small-3 columns bid-terms">
		<?php if ( current_user_can( 'view_bid', $proposal->get_id() ) ) : ?>
			<div class="bid"><span class="proposal-amount"><?php echo get_the_hrb_proposal_amount( $proposal ); ?></span> <span class="proposal-delivery"><?php printf( __( 'in %s ', APP_TD ), get_the_hrb_project_budget_units( $proposal->project, $proposal->_hrb_delivery ) ); ?></span> </div>
		<?php else : ?>
			<div class="bid"><span class="proposal-amount"><?php echo $proposal_hidden; ?></span> <span class="proposal-delivery"><?php echo $proposal_hidden; ?></span> </div>
		<?php endif; ?>
		<div class="submit-time"><span><?php _e( 'Submitted', APP_TD ); ?></span> <span class="proposal-posted-time"><?php the_hrb_proposal_posted_time_ago( $proposal ); ?></span></div>

		<?php if ( get_current_user_id() === (int) $proposal->project->post_author || get_current_user_id() === (int) $proposal->user_id ) { ?>
			<div class="bid-actions">
				<a href="<?php echo esc_url( get_the_hrb_proposal_url( $proposal ) ); ?>" class="button secondary expand"><?php _e( 'View', APP_TD ); ?></a>
			</div>
		<?php } ?>
	</div>

	<div class="large-8 small-9 columns">
		<p class="bidder-info"><?php the_hrb_user_gravatar( $proposal->user_id, 90 ); ?><span class="bidder-display-name"><?php the_hrb_user_display_name( $proposal->user_id ); ?></span> <span class="bidder-location"><i class=" icon i-user-location"></i> <?php the_hrb_user_location( $proposal->user_id ); ?></span></p>
			<?php if ( $proposal->_hrb_featured ) : ?>
				<span class="add-ons">
					<span class="featured"> <?php _e( 'Featured', APP_TD ); ?></span>
				</span>
			<?php endif; ?>
		<p class="bidder-description"><?php the_hrb_user_bio( $proposal->user_id ); ?></p>
		<p class="bidder-skills"><?php the_hrb_user_skills( $proposal->user_id, ' ', '<span class="label">', '</span>'  ); ?></p>
	</div>

	<div class="large-2 columns review-meta">
		<?php the_hrb_user_rating( $proposal->user_id ); ?>
		<?php $user_reviews = appthemes_get_user_total_reviews( $proposal->user_id ); ?>
		<span><?php printf( _n( '1 Review', '%d Reviews', $user_reviews, APP_TD ), $user_reviews ); ?></span>
		<span><?php _e( 'Success Rate', APP_TD );?> <?php the_hrb_user_success_rate( $proposal->user_id ); ?></span>
	</div>

</div><!-- end row -->

<?php if ( current_user_can( 'view_bid', $proposal->get_id() ) ) : ?>

	<div class="row bidder-message">

		<div class="large-2 columns bidder-message-label">
			<i class="icon i-message"></i><strong><?php _e( 'Message', APP_TD ); ?></strong>
		</div>

		<div class="large-10 columns bidder-message-content">
			<span><?php echo $proposal->comment_content; ?></span>
		</div>

	</div><!-- end row -->

<?php else : ?>

	<div class="row bidder-message">
		&nbsp;
	</div>

<?php endif; ?>
