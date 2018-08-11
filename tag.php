<?php
/**
 * The template for tag archives
 *
 * CODEX REF
 * https://codex.wordpress.org/Tag_Templates
 *
 * @license GPL-2
 **/
?>

<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<h1>Tag: <?php the_title(); ?></h1>
	</div>
</div>

<div itemscope itemtype="http://schema.org/CollectionPage">
	<div class="container">
		<div class="row">
			<div class="col-md-9">

				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						?>

					<article class="post" >
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<p><em>
						By <?php the_author(); ?>
						on <?php echo the_time( 'l, F jS, Y' ); ?>
						in <?php the_category( ', ' ); ?>.
						<a href="<?php comments_link(); ?>">
						<?php comments_number(); ?>
						</a>
						</em></p>

						<?php the_excerpt(); ?>
					</article>

					<hr>

				<?php endwhile; else : ?>

					<div class="page-header">
					<h1>Oh no!</h1>
					</div>

					<p>No content is appearing for this page!</p>

				<?php endif; ?>

			</div>

			<?php get_sidebar( 'blog' ); ?>

		</div>

	<?php theme_pagination(); ?>
	</div>
</div>

<?php get_footer(); ?>
