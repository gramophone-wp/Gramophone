<?php

function gramophone_comments( $comment, $args, $depth ) {
	global $post;
	$author_id = $post->post_author;
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments. ?>
	<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
		<div class="pingback-entry"><span class="pingback-heading"><?php esc_html_e( 'Pingback:', 'gramophone' ); ?></span> <?php comment_author_link(); ?></div>
	<?php
		break;
		default :
		// Proceed with normal comments. ?>
    <div class="comment mb-2 row" id="comment-<?php comment_ID(); ?>" <?php comment_class('clr'); ?>>
      <div class="comment-avatar col-md-1 col-sm-2 text-center pr-1">
        <?php echo get_gramophone_avatar( $comment ); ?>
      </div>
      <div class="comment-content col-md-11 col-sm-10">
        <h6 class="small comment-meta">
          <?php comment_author_link(); ?>
          <?php
          // $string = '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>';
          // Developer's note:
          // replace the $string var below with the one above to add a link to the specific comment
          $string = '<time datetime="%2$s">%3$s</time>';
          printf( $string,
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						sprintf( _x( '%1$s', '1: date', 'gramophone' ), get_comment_date() )
					); ?> <?php esc_html_e( 'at', 'gramophone' ); ?> <?php comment_time(); ?>

        </h6>
        <div class="comment-body">
          <?php if ( '0' == $comment->comment_approved ) : ?>
  					<p class="comment-awaiting-moderation alert alert-warning"><?php esc_html_e( 'Your comment is awaiting moderation.', 'gramophone' ); ?></p>
  				<?php endif; ?>
          <p>
            <?php comment_text(); ?>
            <?php comment_reply_link( array_merge( $args, array(
  						'reply_text' => '<span class="small">' . esc_html__( 'Reply to this message', 'gramophone' ) . '</span>',
  						'depth'      => $depth,
  						'max_depth'	 => $args['max_depth'] )
  					) ); ?>
          </p>
        </div>
      </div>
    </div>


	<?php
		break;
	endswitch; // End comment_type check.
}


function get_gramophone_avatar( $id_or_email, $size = null, $default = '', $alt = '', $args = null ) {
	$defaults = array(
		// get_avatar_data() args.
		'size'          => 96,
		'height'        => null,
		'width'         => null,
		'default'       => get_option( 'avatar_default', 'mystery' ),
		'force_default' => false,
		'rating'        => get_option( 'avatar_rating' ),
		'scheme'        => null,
		'alt'           => '',
		'class'         => null,
		'force_display' => false,
		'extra_attr'    => '',
	);
	if ( empty( $args ) ) {
		$args = array();
	}
	$args['size']    = (int) $size;
	$args['default'] = $default;
	$args['alt']     = $alt;
	$args = wp_parse_args( $args, $defaults );
	if ( empty( $args['height'] ) ) {
		$args['height'] = $args['size'];
	}
	if ( empty( $args['width'] ) ) {
		$args['width'] = $args['size'];
	}
	if ( is_object( $id_or_email ) && isset( $id_or_email->comment_ID ) ) {
		$id_or_email = get_comment( $id_or_email );
	}
	/**
	 * Filters whether to retrieve the avatar URL early.
	 *
	 * Passing a non-null value will effectively short-circuit get_avatar(), passing
	 * the value through the {@see 'get_avatar'} filter and returning early.
	 *
	 * @since 4.2.0
	 *
	 * @param string $avatar      HTML for the user's avatar. Default null.
	 * @param mixed  $id_or_email The Gravatar to retrieve. Accepts a user_id, gravatar md5 hash,
	 *                            user email, WP_User object, WP_Post object, or WP_Comment object.
	 * @param array  $args        Arguments passed to get_avatar_url(), after processing.
	 */
	$avatar = apply_filters( 'pre_get_avatar', null, $id_or_email, $args );
	if ( ! is_null( $avatar ) ) {
		/** This filter is documented in wp-includes/pluggable.php */
		return apply_filters( 'get_avatar', $avatar, $id_or_email, $args['size'], $args['default'], $args['alt'], $args );
	}
	if ( ! $args['force_display'] && ! get_option( 'show_avatars' ) ) {
		return false;
	}
	$url2x = get_avatar_url( $id_or_email, array_merge( $args, array( 'size' => $args['size'] * 2 ) ) );
	$args = get_avatar_data( $id_or_email, $args );
	$url = $args['url'];
	if ( ! $url || is_wp_error( $url ) ) {
		return false;
	}
	$class = array( 'avatar', 'avatar-' . (int) $args['size'], 'photo' );
	if ( ! $args['found_avatar'] || $args['force_default'] ) {
		$class[] = 'avatar-default';
	}
	if ( $args['class'] ) {
		if ( is_array( $args['class'] ) ) {
			$class = array_merge( $class, $args['class'] );
		} else {
			$class[] = $args['class'];
		}
	}
  $class[] = "mx-auto rounded-circle img-fluid";

  $string = "<img alt='%s' src='%s' srcset='%s' class='%s' %s height='%d' width='%d' />";
  if($size == null) {
    $string = "<img alt='%s' src='%s' srcset='%s' class='%s' %s />";
  }
	$avatar = sprintf(
		$string,
		esc_attr( $args['alt'] ),
		esc_url( $url ),
		esc_url( $url2x ) . ' 2x',
		esc_attr( join( ' ', $class ) ),
    $args['extra_attr'],
		(int) $args['height'],
		(int) $args['width']
	);
	/**
	 * Filters the avatar to retrieve.
	 *
	 * @since 2.5.0
	 * @since 4.2.0 The `$args` parameter was added.
	 *
	 * @param string $avatar      &lt;img&gt; tag for the user's avatar.
	 * @param mixed  $id_or_email The Gravatar to retrieve. Accepts a user_id, gravatar md5 hash,
	 *                            user email, WP_User object, WP_Post object, or WP_Comment object.
	 * @param int    $size        Square avatar width and height in pixels to retrieve.
	 * @param string $default     URL for the default image or a default type. Accepts '404', 'retro', 'monsterid',
	 *                            'wavatar', 'indenticon','mystery' (or 'mm', or 'mysteryman'), 'blank', or 'gravatar_default'.
	 *                            Default is the value of the 'avatar_default' option, with a fallback of 'mystery'.
	 * @param string $alt         Alternative text to use in the avatar image tag. Default empty.
	 * @param array  $args        Arguments passed to get_avatar_data(), after processing.
	 */
	return apply_filters( 'get_avatar', $avatar, $id_or_email, $args['size'], $args['default'], $args['alt'], $args );
}
