<?php
/**
 * Template Name: Full Page
 * templates/page-full.php
 *
 * A full width page template.
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
    <div class="row">
        <div class="col-md-12 text-justify">

            <?php the_content(); ?>
            <?php wp_link_pages(); ?>

            <?php endwhile; else: ?>

            <h1>No content here!</h1>

            <p>There doesn't seem to be anything here as yet!</p>

            <?php endif; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
