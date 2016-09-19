<?php
/**
 *******************************************************************************
 * //formats/format-status.php
 *******************************************************************************
 *
 * Post format for a status based post.
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
        <?php the_content(); ?>
    </section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
