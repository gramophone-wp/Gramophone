<?php
/**
 * index.php
 *
 * The index page
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/
 * @since BigBooty 1.0.0
 */
?>

<?php get_header(); ?>

<div class="container">   
    <div class="row">
  
        <div class="col-md-9">

            <!-- The WordPress Loop -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="page-header">
                <h1><?php the_title(); ?></h1>
            </div>

            <?php the_content(); ?>
            
            <?php endwhile; else: ?>
          
            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>No content is appearing for this page!</p>

            <?php endif; ?>
            <!-- End WordPress Loop -->

        </div>
  
    <?php get_sidebar(); ?>

    </div>
</div>

<?php get_footer(); ?>
