<?php
/**
 *******************************************************************************
 * //formats/format-aside.php
 *******************************************************************************
 *
 * Post format for an aside post.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/functionality/post-formats/
 * 
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/
?>

<article>
    <section>
    	<blockquote id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<?php the_content(); ?>
        </blockquote>
    </section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
