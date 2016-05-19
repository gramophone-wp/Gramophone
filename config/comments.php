<?php
/**
 **********************************************
 * config/comments.php
 **********************************************
 *
 * The callback functions for styling the comments.
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/


/**
 **********************************************
 * change_avatar_css/1
 ********************************************** 
 *
 * 
 *   
 * 
**/

function change_avatar_css($class) {
  $class = str_replace("class='avatar", "class='media-object img-circle'", $class) ;
  return $class;
}
add_filter('get_avatar','change_avatar_css');


/**
 **********************************************
 * theme_comment/3
 ********************************************** 
 *
 * 
 *   
 * 
**/

function theme_comment($comment, $args, $depth) {

  $GLOBALS['comment'] = $comment;
  extract($args, EXTR_SKIP);

  if ( 'div' == $args['style'] ) 
  {
    $tag = 'div';
    $add_below = 'comment';
  } 
  else 
  {
    $tag = 'li';
    $add_below = 'div-comment';
  }

?>

<<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">

<div class="pull-left">
  <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, 64 ); ?>
</div>

<?php if ( 'div' != $args['style'] ) : ?>
<div class="media-body">
  <div class="well well-lg">
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
      <?php endif; ?>

      <div class="comment-author vcard">
	<?php printf( __( '<h4 class="media-heading text-uppercase reviews">%s</h4>' ), get_comment_author_link() ); ?>
      </div>

       <?php if ( $comment->comment_approved == '0' ) : ?>
       <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
       <br>
       <?php endif; ?>

	<div class="comment-meta commentmetadata">
        <?php
          printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() );
         ?>
	</div>

	<?php comment_text(); ?>

	<div class="reply-buttons pull-right">
          <button class="reply btn btn-info btn-circle text-uppercase">
            <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
	  </button>
          <a class="btn btn-danger btn-circle text-uppercase" href="#" id="reply">
            <span class="glyphicon glyphicon-remove-circle"></span> 
            Hide
          </a>
	    <?php edit_comment_link( __( 'Edit' ), '<div class="btn btn-success btn-circle text-uppercase"><span class="glyphicon glyphicon-wrench"></span>', '</div>' ); ?>
	</div>

	<?php if ( 'div' != $args['style'] ) : ?>
</div>
	<?php endif; ?>

<?php
}

?>
