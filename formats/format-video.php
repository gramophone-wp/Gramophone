<?php
/**
 * formats/format-video.php
 *
 * Post format for a video post.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @license GPL-2
 */
?>

<article>
	<section>
		<?php the_content(); ?>
	</section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
