<?php

/**
 * content.php
 * Template for post content.
 */

?>

<?php
	$post_options = keel_get_post_options();
	if ( $wp_query->current_post === 0 && array_key_exists( 'blog_all_posts_message', $post_options ) && !empty( $post_options['blog_all_posts_message'] ) ) :
?>
	<aside>
		<?php echo stripslashes( do_shortcode( wpautop( $post_options['blog_all_posts_message'], false ) ) ); ?>
	</aside>
<?php endif; ?>

<?php
	/**
	 * Individual Posts
	 */
	if ( is_single() ) :
?>

	<article>

		<header>

			<aside class="text-muted">
				<?php
					// Dates
					$date_original = get_the_time( 'F j, Y' );
					$date_updated = get_the_modified_date( 'F j, Y' );
				?>
				<time datetime="<?php echo $date_original; ?>" pubdate><?php echo $date_original; ?></time>
				<?php
					// If modified
					if ( strtotime( $date_updated ) > strtotime( $date_original ) ) :
				?>
					/ Updated on <time datetime="<?php echo $date_updated; ?>" pubdate><?php echo $date_updated; ?></time>
				<?php endif; ?>
				<?php edit_post_link( __( 'Edit', 'keel' ), ' / ', '' ); ?>
			</aside>

			<h1 class="no-padding-top">
				<?php the_title(); ?>
			</h1>

		</header>


		<?php
			// The post content
			the_content();
		?>

		<?php
			// $post_options = keel_get_post_options();
			if ( !empty( $post_options ) && array_key_exists( 'blog_posts_message', $post_options ) && !empty( $post_options['blog_posts_message'] ) ) {
				echo stripslashes( do_shortcode( wpautop( $post_options['blog_posts_message'], false ) ) );
			}
		?>

		<?php
			// Add comments template to blog posts
			comments_template();
		?>

	</article>

<?php
	/**
	 * All Posts
	 */
	else :
?>

	<article>

		<header>

			<aside class="text-muted">
				<?php
					// Dates
					$date_original = get_the_time( 'F j, Y' );
					$date_updated = get_the_modified_date( 'F j, Y' );
				?>
				<time datetime="<?php echo $date_original; ?>" pubdate><?php echo $date_original; ?></time>
				<?php
					// If modified
					if ( strtotime( $date_updated ) > strtotime( $date_original ) ) :
				?>
					/ Updated on <time datetime="<?php echo $date_updated; ?>" pubdate><?php echo $date_updated; ?></time>
				<?php endif; ?>
				<?php edit_post_link( __( 'Edit', 'keel' ), ' / ', '' ); ?>
			</aside>

			<h1 class="no-padding-top">
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</h1>

		</header>

		<?php
			// The post content
			// the_excerpt();
			the_content(
				sprintf(
					__( 'Read more %s...', 'keel' ),
					'<span class="screen-reader">of ' . get_the_title() . '</span>'
				)
			);
		?>
		<?php
			// Comment out...
			if (false) :
		?>
		<p>
			<a href="<?php the_permalink(); ?>">
				<?php
					printf(
						__( 'Read more %s...', 'keel' ),
						'<span class="screen-reader">of ' . get_the_title() . '</span>'
					);
				?>
			</a>
		</p>
		<?php endif; ?>

		<?php
			// If this is not the last post on the page, insert a divider
			if ( !keel_is_last_post($wp_query) ) :
		?>
		    <hr class="line-secondary">
		<?php endif; ?>

	</article>

<?php endif; ?>