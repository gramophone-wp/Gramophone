<?php
/**
 **********************************************
 * page.php
 **********************************************
 *
 * The general page.
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

<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div class="container">   
  <div class="row row-offcanvas row-offcanvas-right">
    <div class="col-md-7 text-justify">

      <?php the_content(); ?>

      <?php endwhile; else: ?>
              
      <div class="page-header">
        <h1>Oh no!</h1>
      </div>

      <p>No content is appearing for this page!</p>

      <?php endif; ?>

    </div>
    <?php get_sidebar(); ?>
  </div>
</div>

<?php get_footer(); ?>
