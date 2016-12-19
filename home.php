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

    <div class="container">
      	<div class="card pull-right">
            <strong>Display</strong>
            <div class="btn-group">
                <a href="#" id="list" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
                </span>List</a> <a href="#" id="grid" class="btn btn-default btn-sm"><span
                    class="glyphicon glyphicon-th"></span>Grid</a>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('#list').click(function(event){event.preventDefault();jQuery('#products .item').addClass('list-group-item');});
        jQuery('#grid').click(function(event){event.preventDefault();jQuery('#products .item').removeClass('list-group-item');jQuery('#products .item').addClass('grid-group-item');});
    });
    </script>

    <style media="screen">

    .item.list-group-item
    {
      float: none;
      width: 100%;
      background-color: #fff;
      margin-bottom: 10px;
    }

    .item.list-group-item .caption
    {
      padding: 9px 9px 0px 9px;
    }

    .item.list-group-item:before, .item.list-group-item:after
    {
      display: table;
      content: " ";
    }

    .item.list-group-item:after
    {
      clear: both;
    }

    .list-group-item-text
    {
      margin: 0 0 11px;
    }
    </style>

    <div class="container">

      <div class="card">
          <img class="card-img-top" src="..." alt="Card image cap">
          <div class="card-block">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
      </div>
      
        <div id="products" class="row list-group">

            <div class="item  col-xs-12 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>

            <div class="item  col-xs-12 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>

            <div class="item  col-xs-12 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>

            <div class="item  col-xs-12 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>

            <div class="item  col-xs-12 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>

            <div class="item  col-xs-12 col-lg-4">
                <div class="thumbnail">
                    <img class="group list-group-image" src="http://placehold.it/400x250/000/fff" alt="" />
                    <div class="caption">
                        <h4 class="group inner list-group-item-heading">
                            Product title</h4>
                        <p class="group inner list-group-item-text">
                            Product description... Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                            sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="row">
        <div class="col-md-12">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php if( get_the_title() ): ?>
                <h4><a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a></h4>
            <?php else: ?>
                <h4><a href="<?php the_permalink(); ?>">READ MORE</a></h4>
            <?php endif; ?>

                <p>
                    By <?php the_author_posts_link(); ?>
                    <span class="hidden-xs-down">
                    on <?php echo the_time('l, F jS, Y');?>
                    </span>
                    in <?php the_category( ', ' ); ?>.
                    <span class="pull-right hidden-sm-down">
                    <a href="<?php comments_link(); ?>">
                    <?php comments_number(); ?>
                    </a>
                    </span>
                </p>

                <?php the_excerpt(); ?>

            </article>

            <?php endwhile; else: ?>

                <div class="page-header">
                <h1>No posts as yet.</h1>
                </div>

                <p>No content is appearing for this page!</p>

            <?php endif; ?>

        </div>

    <?php theme_pagination(); ?>

    </div>
</div>

<?php get_footer(); ?>
