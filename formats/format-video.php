<?php
/**
 **********************************************
 * formats/format-video.php
 ********************************************** 
 *
 * Post format for a video post.
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
