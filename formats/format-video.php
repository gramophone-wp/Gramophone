<?php
/**
 * File formats/format-video.php
 *
 * Post format for a video post.
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 * @package gramophone
 */

?>

<article class="video-wrapper ">
	<section>
		<?php the_content(); ?>
	</section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
