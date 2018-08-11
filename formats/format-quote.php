<?php
/**
 * formats/format-quote.php
 *
 * Post format for quote post.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @package gramophone
 */
?>

<article>
	<section>
	  <blockquote>
		<cite><?php the_content(); ?></cite>
	  </blockquote>
	</section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
