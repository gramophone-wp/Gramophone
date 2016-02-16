<?php
/**
 **********************************************
 * formats/format.php
 ********************************************** 
 *
 * Post format for a regular, plain ol' post.
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
  <h1><?php the_title(); ?></h1>

  <section>
    <?php the_content(); ?>
  </section>
</article>
