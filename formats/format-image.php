<?php
/**
 * File formats/format-image.php
 *
 * Post format for an image post.
 *
 * @link https://developer.wordpress.org/themes/functionality/post-formats/
 * @package gramophone
 */

$post_content = get_the_content();
$img_url      = wp_extract_urls( $post_content );

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section>
		<img src="<?php echo esc_url( $img_url[0] ); ?>" alt="<?php the_title(); ?>"/>
	</section>
</article>

<?php edit_post_link( 'Edit', '<span class="edit-link">', '</span>' ); ?>
