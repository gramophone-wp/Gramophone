<?php
/**
 * Template Name: Example Template
 * templates/page-template.php
 *
 * An example template for creating custom theme templates.
 *
 * @package gramophone
 */

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

<div class="container-fluid">
	<div class="row flex-xl-nowrap">
		<div class="col-md-8 text-justify">

			<?php the_content(); ?>

			<?php endwhile; else : ?>

			<div class="page-header">
			<h1>No Booty Here!</h1>
			</div>

			<p>There doesn't seem to be anything here as yet!</p>

			<?php endif; ?>

		</div>

		<div class="col-md-4 text-justify">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
