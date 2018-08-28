<?php
/**
 * comments.php
 * Template for post comments.
 */

?>

<?php
	// If post is password protected, don't display comments
if ( post_password_required() ) {
	return;
}
?>

<?php // if ( have_comments() ) : // If there are comments ?>
<?php if ( comments_open() ) : // If comments are allowed ?>
	<h2 id="comments">
		<?php
			$comment_count = go_make_just_comments_count();
		if ( $comment_count === 0 ) {
			_e( 'Comment', 'go-make-things' );
		} elseif ( $comment_count === 1 ) {
			_e( '1 Comment', 'go-make-things' );
		} else {
			echo $comment_count . ' ' . __( 'Comments', 'go-make-things' );
		}
		?>
	</h2>

	<p><a href="#respond">Leave a comment</a> or contact me on Twitter at <a href="http://twitter.com/ChrisFerdinandi">@ChrisFerdinandi</a>.</p>

	<?php
		wp_list_comments(
			array(
				'style' => 'div',
				'avatar_size' => 120,
				'type' => 'comment',
				'callback' => 'go_make_comment_layout', // Custom comment structure (in `functions.php`)
			)
		);
	?>

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // if paginated comments ?>
		<nav>
			<p>
				<?php previous_comments_link( __( '&larr; Older', 'go-make-things' ) ); ?>
				<?php
				if ( get_previous_comments_link() && get_next_comments_link() ) {
					echo ' / ';
				}
				?>
				<?php next_comments_link( __( 'Newer &rarr;', 'go-make-things' ) ); ?>
			</p>
		</nav>
	<?php endif; ?>

	<?php // endif; ?>


	<?php // if ( comments_open() ) : // If comments are allowed ?>
	<?php go_make_comment_form(); // Custom comment form (in `functions.php`) ?>
<?php endif; // end if comments are open ?>

<?php if ( ! comments_open() ) : // if comments aren't allowed ?>
	<p><em><?php _e( 'Comments are closed.', 'go-make-things' ); ?></em></p>
<?php endif; ?>
