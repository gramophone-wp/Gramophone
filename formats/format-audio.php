<?php
/**
 * formats/format-audio.php
 *
 * Post format for an audio post.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @package gramophone
 **/
?>

<article>
	<section>
		<?php the_content(); ?>
	</section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
