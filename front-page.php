<?php
/**
 * The front page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 * @package gramophone
 **/

?>

<?php
	get_header();
?>

<div class="jumbotron jumbotron-fluid">

	<div class="container">
		<h1><?php echo esc_attr( get_bloginfo( 'name' ) ); ?></h1>
		<p><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></p>
		</div>
	</div>

	<div class="container" id="home">
		<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post(); 
		?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>

	<div class="container">
		<div class="row">
			<!-- widget area 1 -->
			<div class="col-md-4">
				<?php if ( dynamic_sidebar( 'front-left' ) ); ?>
			</div>

			<!-- widget area 2 -->
			<div class="col-md-4">
				<?php if ( dynamic_sidebar( 'front-center' ) ); ?>
			</div>

			<!-- widget area 3 -->
			<div class="col-md-4">
				<?php if ( dynamic_sidebar( 'front-right' ) ); ?>
			</div>
		</div>
	</div>
</div>

<?php
	get_footer();
?>
