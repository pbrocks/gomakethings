<?php
/**
 * nav-accessibility.php
 * Template for accessibility improvements to the navigation.
 */

?>

<div class="container container-large">

	<!-- Skip nav link for better a11y -->
	<a class="screen-reader screen-reader-focusable" href="#main"><?php _e( 'Skip to main content', 'go-make-things' ); ?></a>

	<?php if ( false ) : ?>
		<!-- Skip to secondary nav -->
		<a class="screen-reader screen-reader-focusable" href="#nav-secondary"><?php _e( 'Skip to secondary navigation', 'go-make-things' ); ?></a>
	<?php endif; ?>

	<!-- a11y feedback -->
	<a class="screen-reader screen-reader-focusable" href="mailto:<?php echo antispambot( get_option( 'admin_email' ) ); ?>?subject=Go%20Make%20Things:%20Accessibility%20Feedback"><?php _e( 'Accessibility Feedback', 'go-make-things' ); ?></a>

</div>
