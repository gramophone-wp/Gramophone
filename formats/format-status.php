<?php
/**
 * formats/format-status.php
 *
 * Post format for a status based post.
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 * @package gramophone
 */
?>

<article>
	<section>
		<?php the_content(); ?>
	</section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
