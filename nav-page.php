<?php
/**
 * nav-page.php
 * Template for older/newer post navigation.
 */

?>

<?php
	// If page is one of several, include navigation
if ( go_make_is_paginated() ) :
	?>
	<nav class="text-center">
		<p class="padding-top-large margin-bottom-small"><?php posts_nav_link( ' / ', '&larr; ' . __( 'Newer', 'go-make-things' ), __( 'Older', 'go-make-things' ) . ' &rarr;' ); ?></p>
	</nav>
<?php endif; ?>
