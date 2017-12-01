<?php
/**
 * Author (archives) related posts & content.
 *
 * CODEX REF
 * https://codex.wordpress.org/Author_Templates
 *
 * @author
 * @copyright
 * @link
 * @todo
 * @license
 * @since
 * @version
**/

// User Information
$user_id = get_the_author_meta('id');
$biography = get_the_author_meta('description');

// Social Media
$user_gplus = get_the_author_meta('googleplus');
$user_twitter = get_the_author_meta('twitter');

?>

<?php get_header(); ?>

<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            <div class="profile">
                <div class="col-sm-12">
                    <div class="col-xs-12 col-sm-8">
                        <h2><?php the_author(); ?></h2>

                        <p><i class="fa fa-quote-left"></i>
                        <?php echo $biography; ?>
                        <i class="fa fa-quote-right"></i></p>

                        <hr>

                    </div>

                    <div class="col-xs-12 col-sm-4 text-center">
                        <img src="<?php echo get_avatar_url( $user_id ); ?>" alt="" class="img-fluid">
                    </div>

                </div>
                <div class="col-xs-12 divider text-center">
                    <div class="col-xs-12 col-sm-4 emphasis">

                        <h2><strong> <?php echo count_user_posts( $user_id ); ?> </strong></h2>
                        <p><small>Posts</small></p>
                        <button class="btn btn-success btn-block"><span class="fa fa-google-plus"></span> Google Plus </button>

                    </div>

                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>245</strong></h2>
                        <p><small>Following</small></p>
                        <button class="btn btn-info btn-block"><span class="fa fa-twitter"></span> Twitter </button>
                    </div>

                    <div class="col-xs-12 col-sm-4 emphasis">
                        <h2><strong>43</strong></h2>
                        <p><small>Snippets</small></p>
                        <button type="button" class="btn btn-primary btn-block"><span class="fa fa-gear"></span> Options </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="posts">

        <?php
        $curauth = (
            isset($_GET['author_name']))
                ? get_user_by('slug', $author_name) : get_userdata(intval($author)
            );
        ?>

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

        <?php endwhile; else: ?>

        <div class="page-header">
            <h1>Oh no!</h1>
        </div>

        <p>No content is appearing for this page!</p>

        <?php endif; ?>

    </div>
</div>

<?php get_footer(); ?>
