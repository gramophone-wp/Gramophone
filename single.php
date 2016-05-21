<?php
/**
 **********************************************
 * single.php
 **********************************************
 *
 * The single post.
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

<div class="jumbotron">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div class="container">
  <?php get_template_part( 'formats/format', get_post_format() ); ?>

  <hr>
  <?php the_tags(); ?>
</div>


<?php endwhile; endif; ?>

<?php get_footer(); ?>
