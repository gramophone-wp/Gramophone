<?php get_header(); ?>

<div class="jumbotron">
	<div class="container">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php the_content(); ?>

	<?php endwhile; endif; ?>

	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-4">

		<?php if ( dynamic_sidebar( 'front-left' ) ); ?>

		</div>
		<div class="col-md-4">
      
		<?php if ( dynamic_sidebar( 'front-center' ) ); ?>

		</div>
		<div class="col-md-4">
      
		<?php if ( dynamic_sidebar( 'front-right' ) ); ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>