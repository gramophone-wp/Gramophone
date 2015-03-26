<?php
/**
 * 404
 *
 * The 404 template: Something not coming in
 *
 * @author pjh
 * @copyright 2014 - 2015
 * @link http://codex.wordpress.org/Creating_an_Error_404_Page
 * @since BigBooty 1.0.0
 */
?>

<?php get_header(); ?>

<div class="container">   
    <div class="row">
        <div class="col-md-9">

            <div class="page-header">
                <h1>404</h1>
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post">
        
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><em>
                	By <?php the_author(); ?> 
                	on <?php echo the_time('l, F jS, Y');?>
                	in <?php the_category( ', ' ); ?>.
                <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                </em></p>            

            <?php the_excerpt(); ?>

            </article>
            
            <hr>
         
            <?php endwhile; else: ?>

            <p>It Doesn't look like there is any Posts!</p>

            <?php endif; ?>

        </div>

        <?php get_sidebar( 'blog' ); ?>

    </div>
</div>

<?php get_footer(); ?>
