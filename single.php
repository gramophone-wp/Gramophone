<?php
/**
 * The single post
 *
 * CODEX REF
 * https://codex.wordpress.org/Theme_Development#Single_Post_.28single.php
 *
 * @package gramophone
 **/
?>

<?php get_header(); ?>

<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1><?php the_title(); ?></h1>
	</div>
</div>

<div class="container" id="single">
			<?php the_tags(); ?>

			<?php get_template_part( 'formats/format', get_post_format() ); ?>

	<hr>

			<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'gramophone' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
				)
			);

			the_posts_navigation();

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
</div>

		<?php
	endwhile;
endif;
?>

<?php get_footer(); ?>
