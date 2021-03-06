<?php

/**
 * nav-main.php
 * Template for site navigation.
 * You may wish to use `wp_nav_menu()` here, or alternatively, hand-code your navigation.
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */

?>


<header class="container container-large margin-bottom-large">
	<nav class="nav-wrap">
		<a class="logo" href="<?php echo site_url(); ?>/">
			<?php
				$logo = get_theme_mod( 'keel_logo' );
				if ( empty( $logo ) ) :
			?>
				<svg xmlns="http://www.w3.org/2000/svg" style="height:.8em;width:.8em" viewBox="0 0 16 16"><title/><path fill="currentColor" d="M14 9v2.066c-1.258 1.285-3.016 2.526-5 2.852V8.001h3v-1L9 5.83A3.001 3.001 0 0 0 8 .001 3 3 0 0 0 7 5.83L4 7.001v1h3v5.917c-1.984-.326-3.742-1.567-5-2.852V9H0v1c0 2 4 6 8 6s8-4 8-6V9h-2zM9 3a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/></svg>
			<?php else : ?>
				<?php if ( substr( $logo, -4 ) === '.svg' ) : ?>
					<?php echo file_get_contents( $logo ); ?>
				<?php else : ?>
					<img src="<?php echo $logo; ?>">
				<?php endif; ?>
			<?php endif; ?>
			<?php bloginfo( 'name' ); ?>
		</a>
		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<div class="nav-menu" id="nav-menu">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'nav',
						'depth'          => -1,
					)
				); ?>
			</div>
		<?php endif; ?>
	</nav>
</header>