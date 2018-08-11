<?php
/**
 * formats/format-gallery.php
 *
 * Post format for a gallery post.
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 * @package gramophone
 **/
?>

<article>
	<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
	</section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
