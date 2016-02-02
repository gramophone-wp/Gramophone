<?php
/**
 **********************************************
 * home.php
 **********************************************
 *
 * The blog posts.
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

<div class="jumbotron">
    <div class="container">

        <h1><?php wp_title(''); ?></h1>

        <p>Lorum ipsum dolor sit amet, no nam viris feugiat</p>
    
    </div>
</div>

<div class="container">   
    <div class="row">
        <div class="col-md-12">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article class="post">

	    <h4><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h4>

            <p>
                By <?php the_author_posts_link(); ?> 
                on <?php echo the_time('l, F jS, Y');?>
                in <?php the_category( ', ' ); ?>.
                <span class="pull-right">
		    <a href="<?php comments_link(); ?>">
			<?php comments_number(); ?>
                    </a>
                </span>
            </p>            

            <?php the_excerpt(); ?>

            </article>

            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>No content is appearing for this page!</p>

            <?php endif; ?>

        </div>

    </div>
</div>

<?php get_footer(); ?>