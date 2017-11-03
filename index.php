<?php
/**
 *******************************************************************************
 * //index.php
 *******************************************************************************
 *
 * The index page.
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

<?php
    get_header();
?>

<div class="container" id="index">
    <div class="row">
        <div class="col-md-9">

            <!-- The WordPress Loop -->
            <?php
                if ( have_posts() ) : while ( have_posts() ) : the_post();
            ?>

            <h1>
                <?php the_title(); ?>
            </h1>

            <?php
                the_content();
            ?>

            <?php
                endwhile; else:
            ?>

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
