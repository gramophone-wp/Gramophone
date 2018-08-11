<?php
/**
 * formats/format-chat.php
 *
 * Post format for a chat (dump) post.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @license GPL-2
 **/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section>
		<?php the_content(); ?>
	</section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
