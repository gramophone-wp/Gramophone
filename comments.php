<?php
/**
 * The comments section.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/partial-and-miscellaneous-template-files/comments/
 * @package gramophone
 **/

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area col-md-12 col-lg-6">

	<?php if ( have_comments() ) : ?>

		<h3 class="comments-title">

			<?php
				$comments_number = get_comments_number();

			if ( 1 === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'gramophone' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: number of comments, 2: post title */
					_nx(
						'%1$s thought on &ldquo;%2$s&rdquo;',
						'%1$s thoughts on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'gramophone'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>

		</h3>

		<?php the_comments_navigation(); ?>

		<ul class="comment-list">
			<?php
				wp_list_comments(
					array(
						'style'       => 'ul',
						'short_ping'  => true,
						'avatar_size' => 96,
						'callback'    => 'gramophone_comments',
					)
				);
			?>
		</ul>

		<?php the_comments_navigation(); ?>

		<?php endif; // Check for have_comments(). ?>

		<?php
			// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
			?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'gramophone' ); ?></p>
		<?php endif; ?>

		<?php

				$commenter     = wp_get_current_commenter();
				$req           = get_option( 'require_name_email' );
				$aria_req      = ( $req ? " aria-required='true'" : '' );
				$required_text = sprintf( ' ' . __( 'Required fields are marked %s', 'gramophone' ), '<span class="required">*</span>' );

		$args = array(

			'id_form'              => 'commentform',
			'class_form'           => 'comment-form',
			'id_submit'            => 'submit',
			'class_submit'         => 'submit btn btn-block',
			'name_submit'          => 'submit',
			'title_reply'          => __( 'Leave a Reply', 'gramophone' ),
			'title_reply_to'       => __( 'Leave a Reply to %s', 'gramophone' ),
			'cancel_reply_link'    => __( 'Cancel Reply', 'gramophone' ),
			'label_submit'         => __( 'Post Comment', 'gramophone' ),
			'format'               => 'html',

			'comment_field'        => '<p class="comment-form-comment"><label for="comment">' . __( 'Comment', 'gramophone' ) . '</label><textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
			'fields'               => apply_filters(
				'comment_form_default_fields', array(
					'author' =>
					'<p class="comment-form-author">' .
					'<label for="author">' . __( 'Name', 'gramophone' ) . '</label> ' .
					( $req ? '<span class="required">*</span>' : '' ) .
					'<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30"' . $aria_req . ' /></p>',

					'email'  =>
					'<p class="comment-form-email"><label for="email">' . __( 'Email', 'gramophone' ) . '</label> ' .
					( $req ? '<span class="required">*</span>' : '' ) .
					'<input class="form-control" id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30"' . $aria_req . ' /></p>',

					'url'    =>
					'<p class="comment-form-url"><label for="url">' .
					__( 'Website', 'gramophone' ) . '</label>' .
					'<input class="form-control" id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
					'" size="30" /></p>',

				)
			),


			'must_log_in'          => '<label class="info must-log-in">' .
			sprintf(
				__( 'You must be <a href="%s">logged in</a> to post a comment.', 'gramophone' ),
				wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
			) . '</label>',

			'logged_in_as'         => '<p class="logged-in-as">' .
			sprintf(
				__( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>', 'gramophone' ),
				admin_url( 'profile.php' ),
				$user_identity,
				wp_logout_url( apply_filters( 'the_permalink', get_permalink() ) )
			) . '</p>',

			'comment_notes_before' => '<p class="comment-notes">' .
			__( 'Your email address will not be published.', 'gramophone' ) . ( $req ? $required_text : '' ) .
			'</p>',

			'comment_notes_after'  => '<p class="form-allowed-tags">' .
			sprintf(
				__( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes: %s', 'gramophone' ),
				' <code>' . allowed_tags() . '</code>'
			) . '</p>',

		);

		?>

<?php
	comment_form( $args );
?>

</div>
