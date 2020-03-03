<?php
/**
 * Generic Email Body template
 *
 * With this template you can/can't do following:
 * - You can customize this template by copying this file to your child theme.
 * - You can't override this template for specific email type.
 * - Add CSS styles directly to HTML tags in attribute "style".
 * - Don't use "id" or "class" selectors - they might be ignored in web representation of email.
 *
 * @global string $address Array or comma-separated list of email addresses to send message.
 * @global string $subject The email subject text
 * @global string $content The email content text (if set)
 *
 * @package HireBee\Templates
 * @author AppThemes
 * @since 1.4.6
 */
?>
<html>
<head>

</head>

<body <?php if ( is_rtl() ) echo 'style="direction:rtl;"'; ?> >
	<?php echo $content; ?>

	<br />

	<?php echo hrb_email_signature( array(
		'type' => 'Content-Type: text/html; charset="' . get_bloginfo( 'charset' ) . '"',
	) ); ?>
</body>
</html>