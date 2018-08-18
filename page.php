<?php
/**
 * The general page
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/page-templates/
 * @package gramophone
 **/

?>

<?php 
	get_header(); 
?>

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

<div class="container">
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

		<?php get_sidebar(); ?>
	</div>
</div>

<?php 
	get_footer(); 
?>
