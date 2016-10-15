<?php
/**
 *******************************************************************************
 * //formats/format-link.php
 *******************************************************************************
 *
 * Post format for link post.
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

<?php
    $post_content = get_the_content();
    $link_url = wp_extract_urls($post_content);

    $url_host = parse_url($link_url[0], PHP_URL_HOST);
    $base_url_host = parse_url(home_url(), PHP_URL_HOST);

    $external = true;

    if($url_host == $base_url_host || empty($url_host)) {
        $external = false;
    }
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section>
        <!-- If the link is external display the external-link icon -->
        <?php if($external) : ?>
            <a href="<?php echo $link_url[0]; ?>" target="_blank" rel="nofollow"><?php the_title(); ?> <i class="fa fa-external-link" aria-hidden="true"></i></a>
        <?php else : ?>
            <a href="<?php echo $link_url[0]; ?>" target="_self"><?php the_title(); ?></a>
        <?php endif; ?>
    </section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
