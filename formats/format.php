<?php
/**
 * formats/format.php
 *
 * Post format for a regular, plain ol' post.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/functionality/post-formats/
 *
 * @license GPL-2
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope itemtype="http://schema.org/BlogPosting">
    <div class="entry-content" itemprop="articleBody">
        <?php the_content(); ?>
    </div>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
