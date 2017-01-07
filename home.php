<?php
/**
 *******************************************************************************
 * //home.php
 *******************************************************************************
 *
 * The blog posts.
 *
 * CODEX REF
 * https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
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

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1><?php the_title(''); ?></h1>
    </div>
</div>

<div class="container">

    <div class="container" id="display">
      	<div class="pull-right">
            <strong>Display</strong>
            <div class="btn-group">
                <a href="#" id="grid" class="btn btn-default btn-sm"><span class="fa fa-square"></span> Grid</a>
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="fa fa-list"></span> List</a>
            </div>
        </div>
    </div>

    <div class="container">

        <div id="posts" class="row list-group">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- this is a good example -->
            <article class="item  col-xs-12 col-lg-4" id="post-<?php the_ID(); ?>">
                <div class="card">
                    <img class="group list-group-image" src="http://placehold.it/400x220/000/fff" alt="" id="post-image" />
                    <div <?php post_class(); ?>>
                        <div class="card-block">
                        <?php if( get_the_title() ): ?>
                            <h4 class="card-title"><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h4>
                        <?php else: ?>
                            <h4 class="card-title"><a href="<?php the_permalink(); ?>">READ MORE</a></h4>
                        <?php endif; ?>

                            <?php the_excerpt(); ?>

        <a href="<?php the_permalink(); ?>" class="btn btn-primary">View Article</a>
                        </div>
                    </div>
                </div>
            </article>

            <?php endwhile; else: ?>

                <div class="page-header">
                <h1>No posts as yet.</h1>
                </div>

                <p>No content is appearing for this page!</p>

            <?php endif; ?>

        </div>
    </div>

    <?php theme_pagination(); ?>

    </div>
</div>

<?php get_footer(); ?>
