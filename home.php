<?php
/**
 * The blog posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 * @package gramophone
 **/

?>

<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid">
	<div class="container">
		<?php $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
		<h1>Page <?php echo esc_html( $paged ); ?></h1>
	</div>
</div>

	<div class="row">
		<div class="container">
			<div class="float-right">
				<strong>Display</strong>
				<div class="btn-group">
					<a href="#" id="grid" class="btn btn-default btn-sm"><span class="fa fa-square"></span> Grid</a>
					<a href="#" id="list" class="btn btn-default btn-sm"><span class="fa fa-list"></span> List</a>
				</div>
			</div>
		</div>
	</div>

<div class="container">

  <div id="posts" class="list-group">
    <div class="row">
    <?php
    if ( have_posts() ) :
      while ( have_posts() ) :
        the_post();
        ?>

    <article class="grid-item item col-12 col-md-6 col-lg-4" id="post-<?php the_ID(); ?>">
      <div class="card">
        <a href="<?php the_permalink(); ?>">
          <img class="card-img-top" src="<?php echo esc_html( get_the_post_thumbnail_url() ) ? esc_html( get_the_post_thumbnail_url() ) : esc_html( get_template_directory_uri() ) . '/static/images/logos/gramophone_placeholder.png'; ?>" alt="" id="post-image" />
        </a>

        <div <?php post_class(); ?>>
          <div class="card-body">
          <?php if ( get_the_title() ) : ?>
            <h4 class="card-title"><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h4>
          <?php else : ?>
            <h4 class="card-title"><a href="<?php the_permalink(); ?>">READ MORE</a></h4>
          <?php endif; ?>

          <div class="post-metadata">
            <p>
              By <?php the_author_posts_link(); ?>
              <span class="hidden-xs-down">
              on <?php echo the_time( 'l, F jS, Y' ); ?>
              </span>
              in <?php the_category( ', ' ); ?>.
              <span class="pull-right hidden-sm-down">
              <a href="<?php comments_link(); ?>">
              <?php comments_number(); ?>
              </a>
              </span>
            </p>
          </div>

            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="btn btn-outline-primary">View <?php echo ucfirst( get_post_format() ) ? '' : 'Article'; ?></a>
          </div>
        </div>
      </div>
    </article>

    <?php endwhile; else : ?>
    </div>
      <div class="page-header">
      <h1>No posts as yet.</h1>
      </div>

      <p>No content is appearing for this page!</p>

    <?php endif; ?>

  </div>
</div>

<?php theme_pagination(); ?>

</div>

<?php get_footer(); ?>
