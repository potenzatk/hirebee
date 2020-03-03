<?php
/**
 * User registration page content
 *
 * @package HireBee\Templates
 * @since 1.0.0
 */

global $wp_version;
?>

<form action="<?php echo appthemes_get_registration_url( 'login_post' ); ?>" method="post" class="login-form register-form custom" name="registerform" id="login-form">

	<fieldset>

		<div class="row">
			<div class="large-6 columns form-field">
				<label><?php _e( 'Username:', APP_TD ); ?></label>
				<input tabindex="1" type="text" class="text required" name="user_login" id="user_login" value="<?php if ( isset( $_POST['user_login'] ) ) echo esc_attr( stripslashes( $_POST['user_login'] ) ); ?>" />
			</div>

			<div class="large-6 columns form-field"></div>

			<div class="large-6 columns form-field">
				<label><?php _e( 'Email:', APP_TD ); ?></label>
				<input tabindex="2" type="email" class="text required email" name="user_email" id="user_email" value="<?php if ( isset( $_POST['user_email'] ) ) echo esc_attr( stripslashes( $_POST['user_email'] ) ); ?>" />
			</div>
		</div>

		<?php if ( $wp_version < 4.3 ) : ?>

			<div class="row">
				<div class="large-6 columns form-field">
					<label><?php _e( 'Password:', APP_TD ); ?></label>
					<input tabindex="3" type="password" class="text required" name="pass1" id="pass1" value="" autocomplete="off" />
				</div>

				<div class="large-6 columns form-field">
					<label><?php _e( 'Password Again:', APP_TD ); ?></label>
					<input tabindex="4" type="password" class="text required" name="pass2" id="pass2" value="" autocomplete="off" />
				</div>
			</div>

		<?php else : ?>

			<div class="row user-pass1-wrap manage-password">
				<div class="large-6 columns form-field">
					<label for="pass1"><?php _e( 'Password:', APP_TD ); ?></label>

					<?php $initial_password = isset( $_POST['pass1'] ) ? stripslashes( $_POST['pass1'] ) : wp_generate_password( 18 ); ?>

					<input tabindex="3" type="password" id="pass1" name="pass1" class="text required" autocomplete="off" data-reveal="1" data-pw="<?php echo esc_attr( $initial_password ); ?>" aria-describedby="pass-strength-result" />
					<input type="text" style="display:none" name="pass2" id="pass2" autocomplete="off" />
				</div>

				<div class="large-6 columns form-field">
					<button type="button" class="button secondary small wp-hide-pw hide-if-no-js" data-start-masked="<?php echo (int) isset( $_POST['pass1'] ); ?>" data-toggle="0" aria-label="<?php esc_attr_e( 'Hide password', APP_TD ); ?>">
						<span class="dashicons dashicons-hidden"></span>
						<span class="text"><?php _e( 'Hide', APP_TD ); ?></span>
					</button>
				</div>
			</div>

		<?php endif; ?>

		<div class="row">
			<div class="large-6 columns form-field">
				<div id="pass-strength-result" class="hide-if-no-js"><?php _e( 'Strength indicator', APP_TD ); ?></div>
				<p class="description indicator-hint"><?php _e( 'Should be at least seven characters long.', APP_TD ); ?></p>
			</div>
		</div>

		<div class="row">
			<div class="large-6 columns form-field user-role-type">
				<label><?php _e( 'Role:', APP_TD ); ?></label>
				<select name="role">
					<option value="<?php echo esc_attr( HRB_ROLE_EMPLOYER ); ?>"><?php _e( 'Employer', APP_TD ); ?></option>
					<option value="<?php echo esc_attr( HRB_ROLE_FREELANCER ); ?>"><?php _e( 'Freelancer', APP_TD ); ?></option>
					<?php if ( $hrb_options->share_roles_caps ) { ?>
						<option value="<?php echo esc_attr( HRB_ROLE_BOTH ); ?>"/> <?php _e( 'Both', APP_TD ) ?></option>
					<?php } ?>
				</select>

			</div>
		</div>

		<?php do_action( 'register_form' ); ?>

		<div class="form-field">
			<?php echo HRB_Login_Registration::redirect_field(); ?>
			<input tabindex="30" type="submit" class="btn reg" id="register" name="register" value="<?php esc_attr_e( 'Register', APP_TD ); ?>" />
		</div>

	</fieldset>

</form>

<!-- autofocus the field -->
<script type="text/javascript">try{document.getElementById('user_login').focus();}catch(e){}</script>
